<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Commande;
use App\Models\CommandeItem;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){
        $commandes=Commande::where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
        return view('commande.lister',compact('commandes'));  
    }
    
    // creation de la commande et ajout des elements du panier dans le commande item
    public function create(){
        // lecture du panier
        $paniers = Panier::where('user_id', auth()->user()->id)->get();

        // si le panier est vide la boucle ne sera pas realiser et retourne a la page d'avant
        if(count($paniers)==0){return 'vide';}
        // Creation de la commande (si numero = 0 la commande n'a pas été valider)
        $commande = Commande::create(['user_id' => auth()->user()->id,
                                    'numero'=> 0,
                                    'total'=> 0 ]);

        $total=0;
        foreach ($paniers as $panier){
            $commandeId=$commande->id; //identifiant de la commande
            $productId=$panier->product_id; //identifiant du produit
            $quantite=$panier->quantite; //nombre de produit
            $price=$panier->product->price; //prix du produit
            //ajout des elements suivant dans la table commande item
            $total+=$price * $quantite;// ->  $total= $total + $price * $quantite;
            CommandeItem::create(['commande_id'=>$commandeId,
                                    'product_id'=> $productId,
                                    'quantite'=> $quantite,
                                    'price'=>$price]);
            }
        
        $commande->update(['numero'=>9999,'total'=>$total]);//mise a jour du total
        $commande->save();
        //suppression des éléments du panier
        $paniers = Panier::where('user_id', auth()->user()->id)->delete();
        return'commander';
    }
}
