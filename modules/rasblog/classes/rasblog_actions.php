<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 05/01/14
 * Time: 9:05 PM
 */
class RasBlog_Actions extends Cms_ActionScope
{
    public function posts()
    {
        $obj = new RasBlog_Post();
        $this->data['posts'] = $obj->order('created_at desc')->find_all();
    }

    public function post()
    {
        $this->data['post'] = null;

        $post_id = $this->request_param(0);
        if (!strlen($post_id)) {
            return;
        }

        $obj = new RasBlog_Post();
        $this->data['post'] = $obj->find($post_id);

        if (post('add_comment')) {
            $this->on_addComment();
        }
    }

    public function postBlog()
    {
        $this->data['postSuccessful'] = false;

        if (post('add_new_post')) {
            $title = $description = $content = "";
            $titleErr = $contentErr = "";

            // Validate input
            if (post('title')) {
                $title = post('title');
                $this->data['title'] = $title;
            } else {
                $titleErr = "Title is required";
                $this->data['titleErr'] = $titleErr;
            }

            if (post('description')) {
                $description = post('description');
                $this->data['description'] = $description;
            }

            if (post('content')) {
                $content = post('content');
                $this->data['content'] = $content;
            } else {
                $contentErr = "Content is required";
                $this->data['contentErr'] = $contentErr;
            }

            if (empty($titleErr) && empty($contentErr)) {
                // Insert new blog post into DB
                $obj = new RasBlog_Post();
                $obj->title = $title;
                $obj->content = $content;
                if (!empty($description)) {
                    $obj->description = $description;
                }
                $obj->save();

                $this->data['postSuccessful'] = true;
            }
        }
    }

    public function on_addBlogPost()
    {
        $this->data['postSuccessful'] = true;
    }

    public function on_addComment()
    {

        throw new Phpr_ApplicationException('Error adding the comment to the database!');
    }
}