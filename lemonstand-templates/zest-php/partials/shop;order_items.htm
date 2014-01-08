<table class="product-list full-width">
  <tr>
    <th>Item</th>
    <th class="narrow">Quantity</th>
    <th class="narrow">Price</th>
    <th class="narrow">Discount</th>
    <th class="narrow">Total</th>
  </tr>
  <? 
    foreach ($order->items as $item): 
      $image = $item->om('images')->first;
      $image = $image ? $image->thumb(80, 80) : 'http://placehold.it/80x80';
  ?>
  <tr>
    <td>
      <a class="hide-for-small" href="<?= $item->product->page_url('/product') ?>"><img src="<?= $image ?>"/></a>
      <div class="short-description">
        <h3><a href="<?= $item->product->page_url('/product') ?>"><?= $item->product->name ?></a></h3>
        
        <? $description = $item->output_product_name(false, false, false, true, '. ') ?>
        <? if ($description): ?><p><?= $description ?></p><? endif ?>
      </div>
    </td>
    <td class="narrow"><i><?= $item->quantity ?></i></td>
    <td class="narrow"><i><?= format_currency($item->single_price) ?></i></td>
    <td class="narrow"><i><?= format_currency($item->discount) ?></i></td>
    <td class="narrow"><i><?= format_currency($item->subtotal) ?></i></td>
  </tr>
  <? endforeach ?>
</table>