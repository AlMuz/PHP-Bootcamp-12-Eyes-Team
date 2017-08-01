<?php
namespace NewsSite\Repositories;
class CategoryRepo extends Repository
{
    public function getNewsCategory()
    {
//        $category = $this->db->select('news', '*','category_id = 1');
        echo 'dump in category repo';
        dump($this->db->select('news', '*'));
        return $this->db->select('news', '*');

    }
}