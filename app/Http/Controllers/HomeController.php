<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categories;
class HomeController extends Controller
{
     public function index()
  {
    $categorie = Categories::all();
  	$produits = Produit::inRandomOrder()->limit(21)->get();

  	  return view('home.index', compact('produits','categorie'));
  }
}
