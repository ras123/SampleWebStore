<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 06/01/14
 * Time: 1:55 PM
 */

class RasBlog_Post extends Db_ActiveRecord
{
    public $table_name = 'rasblog_posts';
    public $implement = 'Db_AutoFootprints';
    public $auto_footprints_visible = true;

    public $has_many = array(
        'comments'=>array('class_name'=>'RasBlog_Comment',
                                  'foreign_key'=>'blog_id',
                                  'order'=>'created_at desc',
                                  'delete'=>true)
    );

    public function define_columns($context = null)
    {
        $this->define_column('id', '#');
        $this->define_column('title', 'Title');
        $this->define_column('description', 'Description');

        $this->define_multi_relation_column('content', 'comments', 'Comments', '@content');
    }
} 