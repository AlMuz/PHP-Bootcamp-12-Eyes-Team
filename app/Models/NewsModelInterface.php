<?php

namespace NewsSite\Models;

interface NewsModelInterface
{
    public function getNews(): array;

    public function getSingleNew($id): array;

    public function getLatestNews(): array;

    public function getComments($id): array;

    public function getSingleCategory($id): array;

}
