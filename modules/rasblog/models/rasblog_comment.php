<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 07/01/14
 * Time: 4:25 PM
 */
class RasBlog_Comment extends Db_ActiveRecord
{
    public $table_name = 'rasblog_comments';

    public $implement = 'Db_AutoFootprints';
    public $auto_footprints_visible = true;

    public $belongs_to = array(
        'blog'=>array('class_name'=>'RasBlog_Post', 'foreign_key'=>'blog_id')
    );

    public function define_columns($context = null)
    {
        $this->define_column('blog_id', 'Blog ID');
        $this->define_relation_column('title', 'blog', 'Blog Title', db_varchar, '@title');
        $this->define_column('content', 'Comment');
    }
}
