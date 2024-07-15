<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    // Home : show last products and category
    public function index(){
        $categories= Category::all();
        $products= Product::orderBy('id','desc')->paginate(10);
        //dd($categories);
        return view ('product.products',compact('categories','products'));
    }
    // productByCategory : show last products and category
    public function productByCategory(){
        return 'Product By Category';
    }
    // Detail : show product detail and category
    public function show(){
        return view ('product.show');

    }
   
}
