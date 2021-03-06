<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 05/01/14
 * Time: 9:05 PM
 */
class RasBlog_Actions extends Cms_ActionScope
{
    /**
     * Retrieves all blog posts.
     */
    public function posts()
    {
        $obj = new RasBlog_Post();

        $this->data['blog_url'] = 'ras-blog-posts/post/';
        $this->data['posts'] = $obj->order('created_at desc');
    }

    /**
     * Retrieves a single blog post with id specified in the URL.
     */
    public function post()
    {
        $this->data['post'] = null;

        $post_id = $this->request_param(0);
        if (!strlen($post_id)) {
            return;
        }

        $obj = new RasBlog_Post();
        $blog = $obj->find($post_id);

        if ($blog) {
            $this->data['post'] = $blog;

            // Retrieve blog comments
            $this->data['comments'] = $blog->comments;
        }
    }

    /**
     * Stores a new blog post.
     */
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

                Phpr::$session->flash['success'] = 'Blog post added successfully!';
                $this->data['postSuccessful'] = true;
            }
        }
    }

    /**
     * Stores a blog comment.
     */
    public function on_addComment()
    {
        if (!post('comment') || !post('post_id')) {
            return;
        }

        $obj = new RasBlog_Comment();
        $obj->blog_id = post('post_id');
        $obj->content = post('comment');
        $obj->save();
    }
}