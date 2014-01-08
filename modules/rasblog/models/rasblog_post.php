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

    public $has_many = array(
        'comments'=>array('class_name'=>'RasBlog_Comment',
                                  'foreign_key'=>'blog_id',
                                  'order'=>'created_at desc',
                                  'delete'=>true));
} 