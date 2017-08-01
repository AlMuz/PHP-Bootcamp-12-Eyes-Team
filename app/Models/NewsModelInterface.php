<?php

namespace NewsSite\Models;

interface NewsModelInterface
{
    public function getNews() : array;
    public function singleGetNews($id) : array;
}
