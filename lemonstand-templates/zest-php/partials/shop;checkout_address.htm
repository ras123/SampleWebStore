<div class="row">
  <div class="six columns">

    <h3>Billing Information</h3>
    
    <div class="row">
      <div class="six columns">
        <label for="billing_first_name">First Name</label>
        <input type="text" name="billing[first_name]" <?= $this->customer ? 'disabled' : null ?> id="billing_first_name" value="<?= h($billing_info->first_name) ?>"/>
      </div>
      <div class="six columns">
        <label for="billing_last_name">Last Name</label>
        <input type="text" name="billing[last_name]" <?= $this->customer ? 'disabled' : null ?> id="billing_first_name" value="<?= h($billing_info->last_name) ?>"/>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <label for="billing_email">E-mail Address</label>
        <input type="text" name="billing[email]" <?= $this->customer ? 'disabled' : null ?> id="billing_email" value="<?= h($billing_info->email) ?>" />
      </div>
      <div class="six columns">
        <label for="billing_phone">Phone Number</label>
        <input type="text" name="billing[phone]" id="billing_phone" value="<?= h($billing_info->phone) ?>"/>
      </div>
    </div>
    
    <label for="billing_address">Address</label>
    <textarea id="billing_address" name="billing[street_address]"><?= h($billing_info->street_address) ?></textarea>
    <div class="row">
      <div class="six columns">
        <label for="billing_city">City</label>
        <input type="text" name="billing[city]" id="billing_city" value="<?= h($billing_info->city) ?>"/>
      </div>
      <div class="six columns">
        <label for="billing_zip">Zip Code</label>
        <input type="text" id="billing_zip" name="billing[zip]" value="<?= h($billing_info->zip) ?>"/>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <label for="billing_country">Country</label>
        <!-- 
          The state selector updates automatically when the country changes. 
          See app.js for the implementation details. 
        -->        
        <select id="billing_country" name="billing[country]" data-state-selector="billing_state" data-current-state="<?= $billing_info->state ?>">
          <? foreach ($countries as $country): ?>
            <option <?= option_state($billing_info->country, $country->id) ?> value="<?= $country->id ?>"><?= h($country->name) ?></option>
          <? endforeach ?>
        </select>
      </div>
      <div class="six columns">
        <label for="billing_state">State</label>
        <select id="billing_state" name="billing[state]"> 
          <? $this->render_partial('shop:state_options', array('states'=>$states, 'current_state'=>$billing_info->state)) ?>
        </select>
      </div>
    </div>
  </div>
  
  <div class="six columns">
    <h3 class="inline-block">Shipping Information</h3> 

    <!-- See the onCopyBillingToShipping AJAX handler implementation on the Checkout page's AJAX tab -->
    <a href="#" data-ajax-handler="onCopyBillingToShipping" data-ajax-update="checkout-page=shop:checkout_address">Copy Billing Information</a>

    <div class="row">
      <div class="six columns">
        <label for="shipping_first_name">First Name</label>
        <input type="text" name="shipping[first_name]" id="shipping_first_name" value="<?= h($shipping_info->first_name) ?>"/>
      </div>
      <div class="six columns">
        <label for="shipping_last_name">Last Name</label>
        <input type="text" name="shipping[last_name]" id="shipping_last_name" value="<?= h($shipping_info->last_name) ?>"/>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <label for="shipping_phone">Phone Number</label>
        <input type="text" name="shipping[phone]" id="shipping_phone" value="<?= h($shipping_info->phone) ?>"/>
      </div>
    </div>
    
    <label for="shipping_address">Address</label>
    <textarea name="shipping[street_address]" id="shipping_address"><?= h($shipping_info->street_address) ?></textarea>
    <div class="row">
      <div class="six columns">
        <label for="shipping_city">City</label>
        <input type="text" name="shipping[city]" id="shipping_city" value="<?= h($shipping_info->city) ?>"/>
      </div>
      <div class="six columns">
        <label for="shipping_zip">Zip Code</label>
        <input type="text" name="shipping[zip]" id="shipping_zip" value="<?= h($shipping_info->zip) ?>"/>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <label for="shipping_country">Country</label>
        <select id="shipping_country" name="shipping[country]" data-state-selector="shipping_state" data-current-state="<?= $shipping_info->state ?>">
          <? foreach ($countries as $country): ?>
            <option <?= option_state($shipping_info->country, $country->id) ?> value="<?= $country->id ?>"><?= h($country->name) ?></option>
          <? endforeach ?>
        </select>
      </div>
      <div class="six columns">
        <label for="shipping_state">State</label>
        <select id="shipping_state" name="shipping[state]"> 
          <? $this->render_partial('shop:state_options', array('states'=>$shipping_states, 'current_state'=>$shipping_info->state)) ?>
        </select>
      </div>
    </div>
  </div>
</div>
<div class="row"> 
  <div class="twelve columns">
    <div class="right">
      <!-- See the onSetBillingAndShippignInfo AJAX handler implementation on the Checkout page's AJAX tab -->
      <a class="button" href="#" data-ajax-handler="onSetBillingAndShippignInfo" data-ajax-update="checkout-page=shop:checkout, breadcrumbs-area=shop:checkout_progress">Next step</a>
    </div>
  </div>
</div>
<input type="hidden" name="checkout_step" value="<?= $checkout_step ?>"/>