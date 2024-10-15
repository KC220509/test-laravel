<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Product\CreateRequest;
use App\Http\Requests\Web\Product\UpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
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
        return view('productLayout.index', data: ['items'=> $products]);
    }

    public function create()
    {
        return view('productLayout.create');
    }

    public function store(CreateRequest $createRequest)
    {
        $request = $createRequest->validated();
        $result = $this->productService->create($request);
        if ($result) {
            return redirect()->route('product.index')->with('success', 'Product created successfully.');
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
        return view('productLayout.edit', ['product'=> $product]);
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
