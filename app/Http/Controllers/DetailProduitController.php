<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;

class DetailProduitController extends Controller
{
    public function index(Produit $produit)
    {
    	return view('detailProduit.index', compact('produit'));
    }
}
