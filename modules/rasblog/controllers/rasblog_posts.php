<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 08/01/14
 * Time: 7:33 PM
 */
class RasBlog_Posts extends Backend_Controller
{
    public $implement = 'Db_ListBehavior, Db_FormBehavior';
    public $list_model_class = 'RasBlog_Post';
    public $list_record_url = null;

    public $list_search_enabled = true;
    public $list_search_fields = array('@title', '@description', '@content');
    public $list_search_prompt = 'Find posts by title or content';

    public $form_model_class = 'RasBlog_Post';
    public $form_redirect = null;
    public $form_create_title = 'New Post';
    public $form_edit_title = 'Edit Post';
    public $form_not_found_message = 'Post not found';

    public function __construct()
    {
        parent::__construct();
        $this->app_module_name = "Ras's Blog";
        $this->app_tab = 'rasblog';
        $this->app_page = 'posts';

        // URL for when the blog entry in the list is clicked
        $this->list_record_url = url('/rasblog/posts/edit/');
        $this->form_redirect = url('/rasblog/posts');
    }

    public function index()
    {
        $this->app_page_title = "Blog Posts";
    }
}