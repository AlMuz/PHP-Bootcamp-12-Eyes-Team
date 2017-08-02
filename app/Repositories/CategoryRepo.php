<?php

namespace NewsSite\Repositories;

class CategoryRepo extends Repository
{
    /** this get all categories */
    public function getNewsCategory()
    {
        return $this->db->select('categories', '*');
    }
}
