<?php
namespace NewsSite\Models;
interface CategoriesInterface
{
    public function getNewsCategory() : array;
    public function getSingleCategory($id);

}