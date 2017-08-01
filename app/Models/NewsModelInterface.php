<?php

namespace NewsSite\Models;

interface NewsModelInterface
{
    public function getNews() : array;
    public function getSingleNew($id) : array;
    public function getLatestNews() : array;
}
