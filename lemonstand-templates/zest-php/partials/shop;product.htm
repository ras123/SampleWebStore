<? $posted_options = Shop_ProductHelper::get_default_options($product) ?>
<? $images = $product->om('images', $posted_options) ?>
<? $on_sale = $product->om('is_on_sale', $posted_options) ?>

<div class="six columns">
  <div class="item-images">
    <div class="big-image">
      <? $image = $images->first ? $images->first->thumb(746, 'auto') : 'http://placehold.it/460x300'; ?>
    
      <img src="<?= $image ?>" alt="<= h($product->name) ?>"/>
    </div>
    
    <? if ($images->count > 1): ?>
    <ul class="row">
      <? foreach ($images as $image): ?>
        <li class="four columns mobile-two"><a href="<?= $image->thumb(746, 'auto') ?>"><img src="<?= $image->thumb(367, 367) ?>"/></a></li>
      <? endforeach ?>
    </ul>
    <? endif ?>
  </div>
</div>
<div class="six columns description">
  <div class="short-description <?= $on_sale ? 'sale' : null ?>">
    <h2><?= h($product->name) ?></h2>
    <span>
      <a href="#"><i>
        <? if ($on_sale): ?>
         <span class="oldprice"><?= format_currency($product->om('price', $posted_options)) ?></span> 
        <? endif ?>
        <?= format_currency($product->om('sale_price', $posted_options)) ?>
      </i></a>
    </span>
  </div>

  <? $this->render_partial('shop:product_attributes') ?>
  <? $this->render_partial('shop:product_extra_options') ?>
  <? $this->render_partial('shop:product_options') ?>

  <? if (!$product->om('disabled', $posted_options) && $product->enabled): ?>
    <? if (!$product->om('is_out_of_stock', $posted_options)): ?>
      <?= flash_message() ?>
      <label class="title" for="customDropdown">Quantity</label>
      
      <div class="row add-to-cart-block">
        <div class="four columns">
          <input type="text" value="1" name="product_cart_quantity"/>
        </div>
        <div class="four mobile-four columns left">
          <a class="button" href="#" data-ajax-handler="shop:on_addToCart" data-ajax-update="mini-cart=shop:mini_cart, product-page=shop:product">Add to Cart</a>
        </div>
      </div>
    <? else: ?>
      <div class="not-available">
        <p>
          This product is temporarily unavailable.
          <? if ($product->om('expected_availability_date', $posted_options)): ?>
            <br/>The expected availability date is <strong><?= $product->om('expected_availability_date', $posted_options)->format('%x') ?></strong>
          <? endif ?>
        </p>
      </div>
    <? endif ?>
  <? else: ?>
    <div class="not-available"><p>This product is not available.</p></div>
  <? endif ?>
  
  <h3>Description</h3>
  <?= $product->description ?>

</div>