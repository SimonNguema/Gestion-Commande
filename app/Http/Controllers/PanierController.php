<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produit;
use App\Models\Panier;





class PanierController extends Controller
{
     public function index()
	{
    // Récupérez les produits ajoutés dans le panier depuis la base de données ou toute autre source de données
    $paniers= Panier::all(); // Exemple de récupération de tous les produits depuis le modèle "Produit"

    // Récupérez les produits du panier à partir de la base de données
       // $produitsPanier = Panier::with('produits')->get();
        //dd($produitsPanier);

    return view('panier.index', compact('paniers'));
	}



    public function ajouter_au_panier(Request $request)
{
    // Vérifier si l'utilisateur est connecté
    if (!Auth::check()) {
        return redirect()->route('connexion')->with('success', 'Connectez-vous pour ajouter un produit au panier.');
       
    }

    $productId = $request->input('product_id');
    $product = Produit::find($productId);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Récupérer l'utilisateur connecté
    $user = Auth::user();

    // Utilisez la méthode "add()" du modèle Panier pour ajouter le produit au panier
    Panier::add($productId, 1, $user->id);

    return redirect()->back()->with('success', 'Produit ajouté.');
}


    public function supprimer_panier(Request $request)
{
    $productId = $request->input('product_id');

    // Utilisez la méthode "remove()" du modèle Panier pour supprimer le produit du panier
    Panier::remove($productId);

    return redirect()->back()->with('success', 'Produit supprimé .');
}


    
}
