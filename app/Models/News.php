<?php

namespace NewsSite\Models;

use NewsSite\Repositories\NewsRepository;

class News implements NewsModelInterface
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function getNews(): array
    {
        return $this->newsRepository->getNews();
    }

    public function getSingleNew($id): array
    {
        return $this->newsRepository->getSingleNew($id);
    }

    public function getLatestNews(): array
    {
        return $this->newsRepository->getLatestNews();
    }
}
