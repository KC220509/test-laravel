<?php
namespace App\Service;

use App\Models\Category;
use Log;

class CategoryService
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getList()
    {
        return $this->category->all();
    }

}