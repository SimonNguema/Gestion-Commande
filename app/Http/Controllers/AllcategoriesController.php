<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categories;


class AllcategoriesController extends Controller
{
    public function index()
    {
    	 $produits = Produit::all();
         $categorie = Categories::all();
    	return view('allcategories.index', compact('categorie', 'produits'));
    }

    
}
