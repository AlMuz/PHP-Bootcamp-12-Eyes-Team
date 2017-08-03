<?php

namespace NewsSite\Models;

use NewsSite\Repositories\CategoryRepository;

class Categories implements CategoriesInterface
{
    private $CategoryRepo;

    public function __construct(CategoryRepository $CategoryRepo)
    {
        $this->CategoryRepo = $CategoryRepo;
    }

    public function getNewsCategory(): array
    {
        return $this->CategoryRepo->getNewsCategory();
    }

    public function addCategory($title, $date)
    {
        return $this->CategoryRepo->addCategory($title, $date);
    }
}
