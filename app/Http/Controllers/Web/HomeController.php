<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\CategoryService;

class HomeController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $cates = $this->categoryService->getList();

        return view('homeLayout.home', data: ['cates'=> $cates]);
    }
}
