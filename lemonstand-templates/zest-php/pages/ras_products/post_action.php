<?
$category = Shop_Category::create()->where('name=?', 'Office Accessories')->find();
if ($category) {
    $this->data['products'] = $category->list_products(array('sorting'=>array('name')));
}

$this->data['active_page'] = 'ras-products';
?>