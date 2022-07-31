<?php


namespace App\Http\Services\Product;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class ProductService{

    public function getCategory(){
        return Category::select('name','id')->get();
    }


    public function create($request){

        try {
             return Product::create($request->all());
            // return Product::create([
            //     'name' => (string) $request ->input('name'),
            //     'description' => (string) $request ->input('description'),
            //     'category_id' => (int) $request ->input('category_id'),
            //     'price' => (int) $request ->input('price'),
            //     'quantity' => (int) $request ->input('quantity')


            // ]);
        } catch (Exception $err){ 
            return false;
        }
        return true;
    }
}