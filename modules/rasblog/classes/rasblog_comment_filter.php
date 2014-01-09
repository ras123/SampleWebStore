<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 09/01/14
 * Time: 11:48 AM
 */
class RasBlog_Comment_Filter extends Db_DataFilter
{
    public $model_class_name = 'RasBlog_Comment';
    public $list_columns = array('blog_id');

    public function applyToModel($model, $keys, $context = null)
    {
        /*$model->where('(
            select
                count(*)
            from
                rasblog_comments
            where
                blog_id in (?)) > 0',
        array($keys));*/

        $model->where('blog_id in (?)', array($keys));
    }
}