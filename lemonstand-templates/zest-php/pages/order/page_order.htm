<div class="row">
  <div class="content twelve columns">
    <? if (isset($order)): ?>
      <div class="row">
        <div class="eight columns data-list">
          <p><strong>Order number: </strong> #<?= $order->id ?> </p>
          <p><strong>Payment method: </strong> <?= h($order->payment_method->name) ?></p>
          <p><strong>Order Date: </strong> <?= $order->order_datetime->format('%B %d, %Y') ?></p>
        </div>
      </div>
      
      <div class="row">
        <? $this->render_partial('shop:order_items') ?>
      </div>

      <div class="row">
        <div class="two columns">
          <? if ($order->payment_method->has_payment_form() && !$order->payment_processed()): ?>
            <a class="button" href="<?= root_url('/review/'.$order->order_hash) ?>">Pay the order</a>
          <? endif ?>
        </div>
    
        <div class="three columns offset-by-seven data-list align-right">
          <? $this->render_partial('shop:order_totals') ?>
        </div>
      </div>
      
    <? else: ?>
      <p class="flash error">Order not found</p>
    <? endif ?>
  </div>
</div>