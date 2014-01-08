<?
//
// This tab declares custom AJAX handlers required for the checkout page. Custom handlers
// are required because the theme implements a nonstandard (but more usable) checkout
// process that combines some checkout steps making the checkout simpler for the store visitors.
//
// You can find information about implementing custom AJAX handlers and extending
// LemonStand in the documentaiton:
//
// - http://lemonstand.com/docs/ajax/
// - http://lemonstand.com/api/class/shop_checkoutdata/
// - http://lemonstand.com/api/
//

//
// This is a simple AJAX handler that allows to combine the checkout 
// Billing Information and Shipping Information steps.
//
function onSetBillingAndShippignInfo($controller)
{
  // Save the $_POST variable value for the future use
  //
  $post = $_POST;
  
  // Prepare and set the Billing Information data.
  //
  $_POST = $post['billing'];
  
  try {
    Shop_CheckoutData::set_billing_info($controller->customer);
  } catch (Phpr_ValidationException $ex) {
    $ex->validation->setFirstFocusName('billing[%s]');
    throw($ex);
  } 
  
  // Prepare and set the Shipping Information data.
  //
  $_POST = $post['shipping'];

  try {
    Shop_CheckoutData::set_shipping_info();
  } catch (Phpr_ValidationException $ex) {
    $ex->validation->setFirstFocusName('shipping[%s]');
    throw($ex);
  }
  
  // Move to the next checkout step.
  //
  $_POST['move_to'] = 'shipping_method';
  $controller->action();
}

//
// This AJAX handler copies checkout billing information to the 
// checkout shipping information. We cannot use the native shop:on_copyBillingInfo
// handler in this theme because we combined the checkout billing and shipping information
// steps.
//
function onCopyBillingToShipping($controller)
{
  // Set the billing information from the form.
  //
  try {
    $_POST = $_POST['billing'];
    Shop_CheckoutData::set_billing_info($controller->customer);
  } catch (Phpr_ValidationException $ex) {
    $ex->validation->setFirstFocusName('billing[%s]');
    throw($ex);
  }
  
  // Copy the billing information to the shipping information.
  //
  Shop_CheckoutData::copy_billing_to_shipping();
  
  // Execute the default action in order to initialize the 
  // standard checkout variables. We need to reset the checkout step
  // variable first, otherwise the checkout will automatically move to the
  // next step.
  //
  $_POST['checkout_step'] = null;
  $controller->action();
}

//
// This AJAX handler sets the shipping method and places the order.
// The custom AJAX handler is required because in the conventional checkout 
// implementation there is one more checkout step after the Shipping Method step -
// the Payment Method. In this theme we combined the Oreder Review and Payment pages.
// This approach is described in the documentation:
// http://lemonstand.com/docs/combining_the_payment_method_order_review_and_pay_pages/
//
function onPlaceOrder($controller)
{
  // Find the default payment method and set it as the order payment method.
  // If there is no a default payment method, use the first available payment method.
  //
  $method = Shop_PaymentMethod::find_by_api_code('default');
  if (!$method)
  {
    $methods = Shop_PaymentMethod::list_applicable(Shop_CheckoutData::get_billing_info()->country, 0)->as_array();
    $method = isset($methods[0]) ? $methods[0] : null;
  }
      
  if (!$method)
    throw new Phpr_ApplicationException('There are no payment methods available for your location');
  
  Shop_CheckoutData::set_payment_method($method->id);
  
  // Set shipping method
  //
  Shop_CheckoutData::set_shipping_method(null, post('cart_name', 'main'));
  
  // Pretend that we are on the Review checkout step
  // to force LemonStand to place the order and redirect to the payment page.
  $_POST['checkout_step'] = 'review';
  $controller->action();
}
?>