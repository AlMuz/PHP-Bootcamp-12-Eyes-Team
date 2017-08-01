<?php
namespace NewsSite\Repositories;
class CategoryRepo extends Repository
{
    /** this get all categories */
    public function getNewsCategory()
    {
        return $this->db->select('categories', '*');

    }

    /** get the news about 1 category */
    public function  getCategoriesNews($id)
    {

        return $this->db->select('news', '*', ['category_id' => $id]);
    }
}