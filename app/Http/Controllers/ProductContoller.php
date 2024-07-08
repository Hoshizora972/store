<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    // Home : show last products and category
    public function index(){
        return 'home';
    }
    // productByCategory : show last products and category
    public function productByCategory(){
        return 'Product By Category';
    }
    // Detail : show product detail and category
    public function show(){
        return 'detail';
    }
}
