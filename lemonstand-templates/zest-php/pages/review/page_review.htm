<div class="row">
  <div class="content twelve columns">
    <? if (isset($order)): ?>
      <div class="data-list">
        <p><strong>Order number: </strong> #<?= $order->id ?> </p>
        <p><strong>Order Date: </strong> <?= $order->order_datetime->format('%B %d, %Y') ?></p>
      </div>
    
      <div class="row">
        <? $this->render_partial('shop:order_items') ?>
      </div>
      
      <div class="row">
        <div class="six columns">
          <? if ($order->payment_processed): ?>
            <p class="flash info"><strong>Thank you!</strong> The payment is already processed for this order.</p>
          <? else: ?>
            <?= open_form(array('class'=>'custom')) ?>
              <div class="row">
                <div class="twelve columns">
                  <label for="payment_method">Payment method</label>
                  
                  <!-- 
                    The payment form below (id="payment_form") automatically updates when
                    the payment method is changed. See app.js for the implementation details. 
                  -->
                  <select name="payment_method" id="payment_method">
                    <? foreach ($payment_methods as $method): ?>
                      <option <?= option_state($method->id, $order->payment_method_id) ?> value="<?= $method->id ?>"><?= h($method->name) ?></option>
                    <? endforeach ?>
                  </select>
                </div>
              </div>
            <?= close_form() ?>
            
            <div id="payment_form"><? $this->render_partial('shop:payment_form') ?></div>
          <? endif ?>
        </div>
      
        <div class="three columns offset-by-two data-list align-right">
          <? $this->render_partial('shop:order_totals') ?>
        </div>
      </div>
    <? else: ?>
      <p class="flash error">Order not found.</p>
    <? endif ?>
  </div>
</div>