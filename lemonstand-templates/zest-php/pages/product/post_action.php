<?
if (isset($product))
  $this->page->title = $product->categories[0]->name;
  
$this->data['active_page'] = 'shop';
?>