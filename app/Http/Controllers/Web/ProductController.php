<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Product\CreateRequest;
use App\Http\Requests\Web\Product\UpdateRequest;
use App\Models\Product;
use App\Service\CategoryService;
use App\Service\ProductService;

class ProductController extends Controller
{
    protected $productService, $categoryService;
    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $products = $this->productService->getList();
        return view('productLayout.index', data: ['items'=> $products]);
    }

    public function create()
    {
        $cates = $this->categoryService->getList();
        return view('productLayout.create', data: ['cates'=> $cates]);
    }

    public function store(CreateRequest $createRequest)
    {
        $request = $createRequest->validated();
        $result = $this->productService->create($request);
        if ($result) {
            return redirect()->route('product.index')->with('success', 'Thêm mới sản phẩm thành công');
        }

        return response()->json(['message'=> 'error']);
    }

    public function show($id){
        $product = $this->productService->getById($id);
        return view('productLayout.show', ['product'=> $product]);
    }




    public function edit($id)
    {
        $product = $this->productService->getById($id);
        $cates = $this->categoryService->getList();

        return view('productLayout.edit', ['product'=> $product, 'cates'=> $cates]);
    }

    public function updateProduct(Product $product, UpdateRequest $updateRequest)
    {
        $request = $updateRequest->validated();
        $result = $this->productService->update($product, $request);
        if($result) {
            return redirect()->route('product.index')->with('success','Product updated successfully.');
        }
        return response()->json(['message'=> 'error']);
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
