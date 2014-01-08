<?
if ($this->data['order'])
  $this->page->title = 'Order #'.$this->data['order']->id;
  
$this->data['active_page'] = 'orders';
?>