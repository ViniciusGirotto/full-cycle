<?php

namespace Tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testAttributes(){
        $category = new Category(
            name: 'New Category',
            description: 'Category description',
            isActive: true
        );

        $this->assertEquals('New Category', $category->getName());
        $this->assertEquals('Category description', $category->getDescription());
        $this->assertTrue($category->getIsActive());
    }

    public function testActivated() {
        $category = new Category(
            name: 'New Category',
            isActive: false
        );

        $category->activate();

        $this->assertTrue($category->getIsActive());
    }

    public function testDisabled() {
        $category = new Category(
            name: 'New Category',
            isActive: true
        );

        $category->desable();

        $this->assertFalse($category->getIsActive());
    }

    public function testUpdate(){

        $uuid = 'hash.uuid.value';

        $category = new Category(
            id: $uuid,
            name: 'New Category',
            description: 'Category description',
            isActive: true
        );

        $category->update(
            name: 'Updated Category',
            isActive: false
        );

        $this->assertEquals('Updated Category', $category->getName());
        $this->assertEquals('Updated description', $category->getDescription());
        $this->assertFalse($category->getIsActive());
        
    }
}
