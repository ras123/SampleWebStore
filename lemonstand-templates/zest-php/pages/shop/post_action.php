<?
$this->data['active_page'] = 'shop';

/*
 * Prepare the products variable. The Shop page displays all enabled products
 * sorted in the reverse chronological order.
 */
$this->data['products'] = Shop_Product::create()->apply_filters()->order('created_at desc');
?>