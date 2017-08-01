<?php

namespace NewsSite\Repositories;

class CommentRepository extends Repository
{

    public function getComments($id)
    {
        return $this->db->select('comments', '*', ['news_id' => $id]);
    }

}
