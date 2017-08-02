<?php

namespace NewsSite\Repositories;

class NewsRepository extends Repository
{
    public function getNews()
    {
        return $this->db->select('news', '*', ['ORDER' => ['created_at' => 'DESC']]);
    }

    public function getSingleNew($id)
    {
        return $this->db->select('news', '*', ['news_id' => $id]);
    }

    public function getLatestNews()
    {
        return $this->db->select('news', '*', ['LIMIT' => 5, 'ORDER' => ['created_at' => 'DESC']]);
    }

    /** get the news about 1 category */
    public function getCategoriesNews($id)
    {
        return $this->db->select('news', '*', ['category_id' => $id]);
    }
}
