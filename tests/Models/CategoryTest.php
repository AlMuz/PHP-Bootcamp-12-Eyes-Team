<?php

namespace NewsSite\tests\Models;

use NewsSite\Models\Categories;
use NewsSite\Repositories\CategoryRepo;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    public function testGetNewsCategory()
    {
        $categoryRepo = $this->createPartialMock(CategoryRepo::class, ['getNewsCategory']);
        $expected = ['web', 'php', 'gaming', 'tech'];

        $categoryRepo->expects(
            $this->exactly(1))
            ->method('getNewsCategory')
            ->willReturn($expected
        );

        $categories = new Categories($categoryRepo);
        $actual = $categories->getNewsCategory();

        $this->assertSame($expected, $actual);
    }
}
