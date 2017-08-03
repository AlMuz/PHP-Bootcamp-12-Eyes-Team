<?php

namespace NewsSite\Repositories;

class CategoryRepository extends Repository
{
    /** this get all categories */
    public function getNewsCategory(): array
    {
        return $this->db->select('categories', '*');
    }

    public function addCategory($title, $date)
    {
        return $this->db->insert('categories', [
            'title' => $title,
            'created_at' => $date
        ]);
    }
}
