<?php

namespace NewsSite\Models;

use NewsSite\Repositories\NewsRepository;
use NewsSite\Repositories\CommentRepository;

class News implements NewsModelInterface
{
    private $newsRepository;
    private $commentRepository;

    public function __construct(NewsRepository $newsRepository, CommentRepository $commentRepository = null)
    {
        $this->newsRepository = $newsRepository;
        $this->commentRepository = $commentRepository;
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

    public function getComments($id): array
    {
        return $this->commentRepository->getComments($id);
    }


}