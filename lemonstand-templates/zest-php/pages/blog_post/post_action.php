<?
$this->data['active_page'] = 'blog';
$this->data['categories'] = Blog_Category::list_categories();

if (isset($post))
  $this->data['category'] = $post->categories[0];
?>