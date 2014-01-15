<?
$products_on_sale = Shop_Product::create()->list_on_sale(array('sorting'=>array('price asc')));
if ($products_on_sale) {
    $this->data['products_on_sale'] = $products_on_sale;
}

$this->data['active_page'] = 'on-sale';
?>