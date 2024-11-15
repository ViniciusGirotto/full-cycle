<?php

namespace Tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testAttributes()
    {
        $category = new Category(
            id: '123',
            name: 'New Category',
            description: 'Category description',
            isActive: true
        );

        $this->assertEquals('New Category', $category->getName());
        $this->assertEquals('Category description', $category->getDescription());
        $this->assertTrue($category->getIsActive());
    }
}