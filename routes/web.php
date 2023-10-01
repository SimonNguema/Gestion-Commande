<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Tableau_bordController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailProduitController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AllcategoriesController;
use App\Http\Controllers\CommandeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('home');
});



//Home
Route::get('home', [HomeController::class, 'index'])->name('home');



//Produits
Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');
Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');
Route::get('/produits/{produit}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{produit}', [ProduitController::class, 'update'])->name('produits.update');
Route::delete('/produits/{produit}', [ProduitController::class, 'destroy'])->name('produits.destroy');



//DetailProduit
Route::get('detailProduit{produit}',[DetailProduitController::class, 'index'])->name('detailProduit');



//Categories
Route::get('categories',[CategoriesController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorie}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categorie}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/showAll', [CategoriesController::class, 'showAll'])->name('categories.showAll');



//All Categorie

Route::get('allcategories',[AllcategoriesController::class, 'index'])->name('allcategories');



//PANIER

Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
Route::post('panier/ajouter_au_panier', [PanierController::class, 'ajouter_au_panier'])->name('panier.ajouter_au_panier');
Route::post('/panier/supprimer', [PanierController::class, 'supprimer_panier'])->name('panier.supprimer');




//Contact
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/envoyerMessage', [ContactController::class, 'envoyerMessage'])->name('contact.envoyerMessage');

//Administrateurs
Route::get('/user/create', [UsersController::class, 'create'])->name('user.create');
Route::post('/user/index', [UsersController::class, 'store'])->name('user.store');
Route::get('/user/index', [UsersController::class, 'index'])->name('user.index');
Route::get('/user/{user}/edit', [UsersController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UsersController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UsersController::class, 'destroy'])->name('user.destroy');


//Client
Route::get('/user/indexClient', [UsersController::class, 'indexClient'])->name('user.indexClient');

//CONNEXION

Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion');
Route::post('/connexion', [ConnexionController::class, 'connecter'])->name('connexion.connecter');
Route::post('/deconnexion', [ConnexionController::class, 'deconnecter'])->name('deconnexion');

//INSCRIPTION

Route::get('inscription', [InscriptionController::class, 'index'])->name('inscription');
Route::post('inscription', [InscriptionController::class, 'enregistrer']) ->name('inscription.enregistrer');



//A PROPOS
Route::get('apropos', [AboutController::class, 'index'])->name('apropos');

//Tableau de bord
Route::get('tableau_bord/index', [Tableau_bordController::class, 'index'])->name('tableau_bord.index');
Route::get('tableau_bord/contactez_nous', [Tableau_bordController::class, 'contact'])->name('tableau_bord.contactez_nous');
Route::delete('tableau_bord/{contact}/contactez_nous', [Tableau_bordController::class, 'destroy'])->name('tableau_bord.destroy');
Route::get('tableau_bord/commande', [Tableau_bordController::class, 'commande'])->name('tableau_bord.commande');
Route::delete('tableau_bord/{commande}/commande', [Tableau_bordController::class, 'destroyCommande'])->name('tableau_bord.destroyCommande');



//Gestion des commandes
Route::post('commande{panier}', [CommandeController::class, 'index'])->name('commande.index');





