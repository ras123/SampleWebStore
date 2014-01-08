<?
/* The $posts variable is prepared by the blog:archive action.
 * We want to limit the number of latest posts on the home page with 
 * 2 records and update the page's $post variable to use it inside the 
 * page.
 */
$this->data['posts'] = $posts->limit(2)->find_all();
?>