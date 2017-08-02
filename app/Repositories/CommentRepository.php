<?php

namespace NewsSite\Repositories;

class CommentRepository extends Repository
{

    public function getComments($id)
    {
        return $this->db->select('comments', '*', ['news_id' => $id]);
    }

    public function addComment($id)
    {

        if (isset($_POST['author']) && isset($_POST['comment'])) {

            $news_id = $id;
            $author = $_POST['author'];
            $comment = $_POST['comment'];

            $this->db->insert(
                'comments',
                [
                    'news_id' => $news_id,
                    'author' => $author,
                    'body' => $comment
                ]
            );

        }

        return "Something went wrong ..";

    }

}
