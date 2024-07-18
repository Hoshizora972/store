<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;

class FavoriController extends Controller
{
    public function index(){
        // $favories=Favori::where('user_id',auth()->user()->id)->get();
        return view('favori.liste');
    }

    public function AddOrRemove(Product $product){
        $favoris=Favori::where('user_id', auth()->user()->id)
                            ->where('product_id',$product->id)->first();

        if (isset($favoris)){
            $favoris->delete();

        }else{
         Favori::create(['user_id'=> auth()->user()->id,
                        'product_id'=>$product->id]);
}
        return back();
    }

}
