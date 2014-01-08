<?= flash_message() ?>

<? $items = Shop_Cart::list_items() ?>
<? if ($items): ?>
  <div class="row">
    <table class="product-list full-width">
      <tr>
        <th>Item</th>
        <th class="narrow">Quantity</th>
        <th class="narrow">Price</th>
        <th class="narrow">Discount</th>
        <th class="narrow">Total</th>
        <th class="narrow"></th>
      </tr>
      <? foreach ($items as $item):
        $image = $item->om('images')->first;
        $image = $image ? $image->thumb(80, 80) : 'http://placehold.it/80x80';
      ?>
      <tr>
        <td>
          <a class="hide-for-small" href="<?= $item->product->page_url('/product') ?>"><img src="<?= $image ?>"/></a>
          <div class="short-description">
            <h3><a href="<?= $item->product->page_url('/product') ?>"><?= h($item->product->name) ?></a></h3>
            <? $description = $item->item_description('. ', true) ?>
            <? if ($description): ?><p><?= $description ?></p><? endif ?>
          </div>
        </td>
        <td class="narrow"><input type="text" name="item_quantity[<?= $item->key ?>]" class="quantity" value="<?= $item->quantity ?>"></td>
        <td class="narrow"><i><?= format_currency($item->single_price()) ?></i></td>
        <td class="narrow"><i><?= format_currency($item->total_discount()) ?></i></td>
        <td class="narrow"><i><?= format_currency($item->total_price()) ?></i></td>
        <td class="narrow remove">
          <a href="#" 
            data-ajax-handler="shop:on_deleteCartItem" 
            data-ajax-confirm="Do you really want to remove this item from the cart?" 
            data-ajax-update="cart-content=shop:cart_content, mini-cart=shop:mini_cart"
            data-ajax-extra-fields="key='<?= $item->key ?>'"
          >Remove</a></td>      
      </tr>
      <? endforeach ?>
    </table>
  </div>
  
  <div class="row">
    <div class="six columns">
      <h3>Shipping rates calculator</h3>

      <div class="row">
        <div class="four columns">
          <label for="country">Country</label>
          <!-- 
            The state selector updates automatically when the country changes. 
            See app.js for the implementation details. 
          -->
          <select id="country" name="country" data-state-selector="state" data-current-state="<?= $shipping_info->state ?>">
            <? foreach ($countries as $country): ?>
              <option value="<?= $country->id ?>" <?= option_state($country->id, $shipping_info->country) ?>><?= $country->name ?></option>
            <? endforeach ?>
          </select>
        </div>

        <div class="four columns">
          <label for="state">State</label>
          <select id="state" name="state"> 
            <? $this->render_partial('shop:state_options', array('states'=>$states, 'current_state'=>$shipping_info->state)) ?>
          </select>
        </div>
    
        <div class="four columns">
          <label for="zip">Zip/Postal Code</label>
          <input name="zip" type="text" value="<?= h($shipping_info->zip) ?>"/>
        </div>
      </div>
      
      <a class="button" href="#" data-ajax-handler="shop:on_evalShippingRate" data-ajax-update="shipping_options=shop:estimated_shipping_options">Calculate</a>
        
      <div id="shipping_options"></div>
    </div>
    
    <div class="three columns offset-by-three data-list align-right">
      <p><strong>Discount applied:</strong> <i><?= format_currency($discount) ?></i></p>
      <p><strong>Cart total:</strong> <i><?= format_currency($cart_total) ?></i></p>
      <p class="subtotal"><strong>Estimated total:</strong>  <i><?= format_currency($estimated_total) ?></i></p>
    </div>
  </div>  
  <div class="row">
    <div class="buttons-block">
      <div class="six columns">
        <a class="secondary button" href="<?= root_url('shop') ?>">Continue shopping</a>
      </div>
      <div class="six columns">
        <div class="right">
          <input type="text" id="coupon" name="coupon" value="<?= h($coupon_code) ?>" placeholder="Coupon code"/>
        
          <a class="secondary button" href="#" data-ajax-handler="on_action" data-ajax-update="cart-content=shop:cart_content, mini-cart=shop:mini_cart">Update cart</a> 
          <a class="button" href="<?= root_url('/checkout-start') ?>">Checkout</a>          
        </div>
      </div>
    </div>
  </div>
<? else: ?>
  <div class="row">
    <div class="six columns">
      <a class="secondary button" href="<?= root_url('shop') ?>">Your cart is empty! Continue shopping.</a>
    </div>
  </div>
<? endif ?>