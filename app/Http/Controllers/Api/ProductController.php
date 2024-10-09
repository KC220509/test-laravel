<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = $this->productService->getList();
        return view("products.list", ["items"=> $products]);
    }
}
