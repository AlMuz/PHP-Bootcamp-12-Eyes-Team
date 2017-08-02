<?php

namespace NewsSite\Models;

use NewsSite\Repositories\CategoryRepo;

class Categories implements CategoriesInterface
{
    private $CategoryRepo;

    public function __construct(CategoryRepo $CategoryRepo)
    {
        $this->CategoryRepo = $CategoryRepo;
    }

    public function getNewsCategory(): array
    {
        return $this->CategoryRepo->getNewsCategory();
    }

    public function addCategory() {
        return $this->CategoryRepo->addCategory();
    }
}
