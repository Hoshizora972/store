<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index(){
        $paniers=Panier::where('user_id',auth()->user()->id)->get();
        return view('panier.liste',compact('paniers'));
    }

    public function ajouter(Product $product){
        //search product on the data base
        $existProduct = Panier::where('user_id',auth()->user()->id)
                                ->where('product_id','=',$product->id)
                                ->first();

        //if product exist update quantities
        if(isset($existProduct)){
            $existProduct->quantite= $existProduct->quantite+1;
            $existProduct->save();

        }else{
            Panier::create(['user_id'=>auth()->user()->id,
                        'product_id'=> $product->id]);
        }

        //else add the product
        return redirect()->route('panier.lister');
        
    }

    public function commander(){
    return 'commander';
    }

    //supprime le produit du chariot
    public function remove(Panier $panier){
        $panier->delete();
    return back();
    }

    //soustrait la quantité du produit
    public function moins(Panier $panier){
        if($panier->quantite==1){
            $panier->delete();
        }else{
            $panier->quantite = $panier->quantite-1;
            $panier->save();
        }
        
    return back();
    }
}
