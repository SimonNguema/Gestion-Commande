<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categories;
use App\Models\Commande;
use App\Models\Contact;
class ProduitController extends Controller
{


    public function panier()
    {

        return $this->hasMany(Panier::class, 'product_id');

    }
    public function index()
    {
        $produits = Produit::with('categorie')->get();
        $client= User::all();
        $categorie = Categories::all();
        $commande = Commande::all();
        $contact = Contact::all();
        return view('produits.index', compact('produits', 'client', 'categorie','commande','contact'));
    }

    public function create()
    {
        $produits = Produit::all();
        $client= User::all();
        $categorie = Categories::all();
        $commande = Commande::all();
        $contact = Contact::all();
        return view('produits.create', compact('produits', 'client', 'categorie','commande','contact'));
    }

    public function store(Request $request)
    {


        $produit = Produit::create($request->all());
        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès !');
    }

    public function edit(Produit $produit)

    {
        $produits = Produit::all();
        $client= User::all();
        $categorie = Categories::all();
        $commande = Commande::all();
        $contact = Contact::all();
        return view('produits.edit', compact('produit','produits', 'client', 'categorie','commande','contact'));
    }

    public function update(Request $request, Produit $produit)
    {

        $produit->update($request->all());
        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès !');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès !');
    }

 



 

}

