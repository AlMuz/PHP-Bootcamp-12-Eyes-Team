<?php

namespace NewsSite\Repositories;

class NewsRepository extends Repository
{
    public function getNews()
    {
        return $this->db->select('news', '*');
    }

    public function singleGetNews($id)
    {
        return $this->db->select('news', '*', ['news_id' => $id]);
    }
}
