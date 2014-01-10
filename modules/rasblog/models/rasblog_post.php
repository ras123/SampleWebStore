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

    /**
     * Columns to be used when listing blog posts.
     * @param null $context
     */
    public function define_columns($context = null)
    {
        $this->define_column('id', '#');
        $this->define_column('title', 'Title')->validation()->fn('trim')->
            required('Please specify title for the blog post')->
            minLength(4, 'The post title should be at least 4 characters long');
        $this->define_column('description', 'Description');
        $this->define_column('content', 'Content')->invisible()->validation()->
            required('Please enter content of the blog post');

        $this->define_multi_relation_column('comments', 'comments', 'Comments', '@content');
    }

    /**
     * Columns to be used for rendering a blog post form.
     * @param null $context
     */
    public function define_form_fields($context = null)
    {
        $this->add_form_field('title');
        $this->add_form_field('description');
        $this->add_form_field('content');
    }
} 