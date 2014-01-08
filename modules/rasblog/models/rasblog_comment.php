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

    /*public function define_columns($context = null)
    {
        $this->define_column('created_at', 'Added')->order('desc');
    }*/
}
