<?php


namespace App\Http\Services\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryService{
    public function create($request){

        try {
            return Category::create([
                'name' => (string) $request ->input('name'),
                'description' => (string) $request ->input('description'),
                'content' => (string) $request ->input('content')
    
            ]);
        } catch (Exception $err){ 
            return false;
        }
        return true;
    }
}