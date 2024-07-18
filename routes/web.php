<?php

use App\Models\Favori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoriController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductContoller;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

//affichage des produits
Route::get('/',[ProductContoller::class,'index'])->name('product');
Route::get('/product/{product}',[ProductContoller::class,'show'])->name('product.detail');
Route::get('/product/category/{id}',[ProductContoller::class,'productByCategory'])->name('product.category');

//gestion du dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//gestion des connexions

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/panier', [PanierController::class, 'index'])->name('panier.lister');
    Route::get('/panier/add/{product}', [PanierController::class, 'ajouter'])->name('panier.ajouter');
    Route::get('/panier/moins/{panier}', [PanierController::class, 'moins'])->name('panier.moins');
    Route::get('/panier/remove/{panier}', [PanierController::class, 'remove'])->name('panier.remove');
    
});
//gestion des favoris
Route::middleware('auth')->group(function () {
    Route::get('/favori', [FavoriController::class, 'index'])->name('favori.liste');
    Route::get('/favori/addremove/{product}', [FavoriController::class, 'AddOrRemove'])->name('favori.edit');
    
});

require __DIR__.'/auth.php';
