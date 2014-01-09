<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 09/01/14
 * Time: 11:54 AM
 */
class RasBlog_Comments extends Backend_Controller
{
    public $implement = 'Db_ListBehavior, Db_FilterBehavior, Db_FormBehavior';
    public $list_model_class = 'RasBlog_Comment';
    public $list_record_url = null;

    public $list_search_enabled = true;
    public $list_search_fields = array('@blog_id', '@content');
    public $list_search_prompt = 'Find comments by blog id or content';

    public $list_options = array();
    public $list_custom_prepare_func = null;

    public $filter_list_title = 'Filter comments';
    public $filter_onApply = 'listReload();';
    public $filter_onRemove = 'listReload();';
    public $filter_filters = array(
        'blog_id'=>array(
            'name'=>'Blog ID',
            'class_name'=>'RasBlog_Comment_Filter',
            'prompt'=>'Choose Blog IDs to include in the list.',
            'added_list_title'=>'Added Blog IDs')
    );

    public function __construct()
    {
        parent::__construct();
        $this->app_module_name = "Ras's Blog";
        $this->app_tab = 'rasblog';
        $this->app_page = 'comments';

        $this->list_record_url = url('/rasblog/comments/edit/');
    }

    public function index()
    {
        $this->app_page_title = "Blog Comments";
    }

    public function listPrepareData()
    {
        $obj = new RasBlog_Comment();
        $this->filterApplyToModel($obj);

        return $obj;
    }
}