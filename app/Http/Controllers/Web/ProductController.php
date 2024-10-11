<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $products = $this->productService->getList();
        return view('products.list', data: ['items'=> $products]);
    }
}
