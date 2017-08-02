<?php

namespace NewsSite\Repositories;

class NewsRepository extends Repository
{
    public function getNews()
    {
        return $this->db->select('news', '*', ['ORDER' => ['created_at' => 'DESC']]);
    }

    public function addNews()
    {
        return $this->db->insert('news',[
            'category_id' => $_POST["category"],
            'title' => $_POST["title"],
            'body' => $_POST["body"],
            'author' => $_POST["author"],
            'created_at' => date("Y-m-d H:i:s")]);
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
        return $this->db->select('news', '*', ['category_id' => $id, 'ORDER' => ['created_at' => 'DESC']]);
    }
}
