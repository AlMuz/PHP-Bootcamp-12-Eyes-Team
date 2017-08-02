<?php

namespace NewsSite\Repositories;

class CategoryRepository extends Repository
{
    /** this get all categories */
    public function getNewsCategory(): array
    {
        return $this->db->select('categories', '*');
    }

    public function addCategory()
    {
        return $this->db->insert('categories', [
            'title' => $_POST["category"],
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
