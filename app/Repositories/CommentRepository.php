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
            $author = $this->testInput($_POST['author']);
            $comment = $this->testInput($_POST['comment']);

            $this->db->insert(
                'comments',
                [
                    'news_id' => $news_id,
                    'author' => $author,
                    'body' => $comment,
                    'created_at' => date("Y-m-d H:i:s")
                ]
            );

        }

        return "Something went wrong ..";
    }

    private function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
