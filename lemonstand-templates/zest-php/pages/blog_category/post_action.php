<?
$this->data['active_page'] = 'blog';
$this->data['categories'] = Blog_Category::list_categories();

// Paginate the post list. Load the page index from the last URL segment.
// The number of records on a page is 5.
if (isset($category))
{
  $this->data['pagination'] = $posts->paginate($this->request_param(-1, 1)-1, 5);
  $this->data['posts'] = $posts->find_all();
  
  $this->page->title = $category->name;
}
?>