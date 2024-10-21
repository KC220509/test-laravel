<?php
namespace App\Service;

use App\Models\Product;
use Log;

class ProductService
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getList()
    {
        return $this->product->all();
    }

    public function create($param){
        try
        {
            return $this->product->create($param);
        }catch(\Exception $ex){
            Log::error($ex);
            return false;
        }
    }

    public function getById($id){
        try
        {
            return Product::find($id);
        }
        catch(\Exception $ex){
            Log::error($ex);
            return false;
        }
    }

    public function update($product, $params){
        try
        {
            return $product->update($params);
            // return $this->product->update($id,$param);
        }catch(\Exception $ex){
            Log::error($ex);
            return false;
        }
    }

}