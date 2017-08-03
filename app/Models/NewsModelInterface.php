<?php

namespace NewsSite\Models;

interface NewsModelInterface
{
    public function getNews(): array;

    public function addNews($category, $title, $body, $author, $date);

    public function getSingleNew($id): array;

    public function getLatestNews(): array;

    public function getComments($id): array;

    public function addComment($id, $author, $comment);

    public function getSingleCategory($id): array;
}
