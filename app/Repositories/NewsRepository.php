<?php

namespace NewsSite\Repositories;

class NewsRepository extends Repository
{
    public function getNews()
    {
        return $this->db->select('news', '*');
    }
}
