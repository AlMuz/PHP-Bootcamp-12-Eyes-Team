<?php

namespace NewsSite\Models;

use NewsSite\Repositories\CommentRepository;
use NewsSite\Repositories\NewsRepository;

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

    public function addNews($category, $title, $body, $author, $date)
    {
        return $this->newsRepository->addNews($category, $title, $body, $author, $date);
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

    public function getSingleCategory($id): array
    {
        return $this->newsRepository->getCategoriesNews($id);
    }

    public function addComment($id, $author, $comment)
    {
        return $this->commentRepository->addComment($id, $author, $comment);
    }
}
