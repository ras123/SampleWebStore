<div class="row">
  <h3>Shipping Method</h3>

  <div class="six columns">
    
    <? if ($shipping_options_flat): ?>
      <table class="compact full-width" id="shipping-methods">
        <?
          $index = 0;
          foreach ($shipping_options_flat as $option): 
            $index++;
        ?>
          <tr>
            <td>
              <label for="<?= 'option'.$index ?>">
                <!-- The shipping method radio button clicks are handled in the app.js -->
                <input name="shipping_option" 
                  <?= $option->error_hint ? 'disabled' : null ?>
                  value="<?= $option->id ?>" 
                  <?= radio_state(!$option->error_hint & shipping_method_selected($shipping_method, $option)) ?>
                  type="radio" id="<?= 'option'.$index ?>"/>
                  
                <span class="choice-title">
                  <? if ($option->multi_option_name): ?><strong><?= h($option->multi_option_name) ?></strong> - <? endif ?>
                  <?= h($option->name) ?>
                </span>
                
                <? if ($option->error_hint): ?>
                  <span class="choice-description error-hint"><?= h($option->error_hint) ?></span>
                <? endif ?>
              </label>
            </td>
            <td class="narrow">
              <? if (!$option->error_hint): ?>
                <?= !$option->is_free ? format_currency($option->quote) : 'free' ?>
              <? endif ?>
            </td>
          </tr>
        <? endforeach ?>
      </table>  
    <? else: ?>
      <p>We are sorry, there are no shipping options available for your location.</p>
    <? endif ?>
  </div>
  
  <div class="three columns data-list align-right" id="checkout-totals">
    <? $this->render_partial('shop:checkout_totals') ?>
  </div>
</div>

<? if ($shipping_options_flat): ?>
  <div class="row"> 
    <div class="twelve columns">
      <div class="right">
        <!-- See the onPlaceOrder AJAX handler implementation on the Checkout page's AJAX tab -->
        <a class="button" href="#" data-ajax-handler="onPlaceOrder">Place order &amp; pay</a>
      </div>
    </div>
  </div>
<? endif ?>
<input type="hidden" name="checkout_step" value="<?= $checkout_step ?>"/>