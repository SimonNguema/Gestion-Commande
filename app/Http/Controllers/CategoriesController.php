<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Commande;

class CategoriesController extends Controller
{
       public function index(Request $request)
	  {
        $categorieId = $request->input('categorie_id');
         //$produits = Produit::all();
       
         $produits = ($categorieId)

        ? Produit::where('categorie_id', $categorieId)->get()
        : Produit::all();
         $categorie = Categories::all();
        return view('categories.index', compact('produits', 'categorie'));
      }

         public function showAll()
	  {
        $contact = Contact::all();
       $categorie = Categories::all();
       $produits = Produit::all();
       $user = User::all();
       $client= User::all();
       $commande = Commande::all();
    
        return view('categories.showAll', compact('produits', 'client', 'categorie', 'user','commande', 'contact' ));
      }

	public function create()
    {
        
        
        
       $contact = Contact::all();
       $categorie = Categories::all();
       $produits = Produit::all();
       $user = User::all();
       $client= User::all();
       $commande = Commande::all();
        return view('categories.create', compact('produits', 'client', 'categorie', 'user','commande', 'contact' ));
    }

  

     public function store(Request $request)
    {


        $categorie = Categories::create($request->all());
        return redirect()->route('categories.showAll')->with('success', 'Categorie ajouté avec succès !');
    }


    public function edit(Categories $categorie)
    {

        $contact = Contact::all();
        $categorie = Categories::all();
        $produits = Produit::all();
        $user = User::all();
        $client= User::all();
        $commande = Commande::all();
        
        
        return view('categories.edit', compact('categorie', 'produits', 'client','commande', 'contact'));
    }


    

    public function update(Request $request, Categories $categorie)
    {

        $categorie->update($request->all());
        return redirect()->route('categories.showAll')->with('success', 'Categorie mis à jour avec succès !');
    }

    public function destroy(Categories $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.showAll')->with('success', 'Categorie supprimé avec succès !');
    }
}
