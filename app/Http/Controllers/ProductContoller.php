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
        $products= Product::orderBy('id','desc')->paginate(12);
        //dd($categories);
        return view ('product.products',compact('categories','products'));
    }
    // productByCategory : show last products and category
    public function productByCategory(Category $id)
    {
        //Requête pour filtrer les produit a partir de la catégorie
        $categories = Category::all();
        $products = Product::where('category_id', $id)
            ->orderBy('id', 'desc')
            ->paginate(8);
        return view('product.products', compact('categories', 'products'));
    }
    // Detail : show product detail and category
    public  function show(Product $product )  {

        //

        $products = Product::where('category_id', $product->category_id  )
                            ->inRandomOrder()
                            ->limit(5)
                            ->get();
            return view('product.show',compact('product' ,'products'));
    }
}


