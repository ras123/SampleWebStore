<?= open_form() ?>
  <? 
    $pagination = null;
    if (isset($paginate) && $paginate) {
      $page_index = isset($page_index) ? $page_index-1 : 0;
      $records_per_page = isset($records_per_page) ? $records_per_page : 3;
      $pagination_base_url = isset($pagination_base_url) ? $pagination_base_url : null;
      $pagination = $products->paginate($page_index, $records_per_page);
    }
    
    $product_collection = $products->collection();
  ?>

  <ul class="clearfix">
    <? foreach ($product_collection as $product): ?>
      <? $is_on_sale = $product->om('is_on_sale') ?>
      <? $page_url = $product->page_url('/product') ?>
      <?
        $image = $product->om('images')->first;
        $image = $image ? $image->thumb(365, 365) : 'http://placehold.it/365x365';
      ?>
      
      <li class="three columns mobile-two <?= $is_on_sale ? 'sale' : null ?>">
        <div class="item">
          <div>
            <a href="<?= $page_url ?>"><img src="<?= $image ?>" title="<?= h($product->name) ?>"/></a>
          </div>
          
          <div class="short-description">
              <h3><a href="<?= $page_url ?>"><?= h($product->name) ?></a></h3>
              
              <span>
                <a href="<?= $page_url ?>">
                  <i>
                    <? if ($is_on_sale): ?><span class="oldprice"><?= format_currency($product->om('price')) ?></span><? endif ?>
                    <?= format_currency($product->om('sale_price')) ?>
                  </i>
                </a>
              </span>
          </div>
          <? if ($is_on_sale): ?><span class="salesign">SALE</span><? endif ?>
        </div>
      </li>
    <? endforeach ?>
    <? if (!$product_collection->count && isset($empty_text)): ?>
      <li class="empty"><?= h($empty_text) ?></li>
    <? endif ?>
  </ul>

  <? if ($pagination): ?><? $this->render_partial('pagination', array('pagination'=>$pagination, 'base_url'=>$pagination_base_url)) ?><? endif ?>
<?= close_form() ?>