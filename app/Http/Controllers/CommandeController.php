<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Commande;
use App\Models\Categories;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\User;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
      
        $panier=Panier::find($id);
        $produit=Produit::where('id',$panier->produit_id)->get();
       
       foreach($produit as $produits ){

        $categorie=$produits->categorie_id;
        $categorie=Categories::where('id',$categorie)->get();

        $commande=new Commande();
       $commande->montant=$panier->quantite * $produits->prix;
       $commande->users_id=Auth::User()->id;
       $commande->produit_id=$produits->id;
       $commande->panier_id=$id;
       $commande->save();
        
       }
       
       return view('commande.index', compact('produit', 'categorie', 'commande', 'panier' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
      

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
