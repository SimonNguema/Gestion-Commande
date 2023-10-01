<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;

class AboutController extends Controller
{
  public function index()
  {

  	$produits = Produit::all();
  	  return view('apropos.index', compact('produits'));
  }
}
