<?php

namespace NewsSite\Models;

interface NewsModelInterface
{
    public function getNews(): array;
    public function addNews();
    public function getSingleNew($id): array;
    public function getLatestNews(): array;
    public function getComments($id): array;
    public function addComment($id);
    public function getSingleCategory($id): array;

}
