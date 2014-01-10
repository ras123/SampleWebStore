<?
$this->data['active_page'] = 'ras-blog-posts';
$this->data['posts'] = $posts->limit(5)->find_all();
?>