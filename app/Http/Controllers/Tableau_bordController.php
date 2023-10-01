<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Panier;
use App\Models\Commande;


class Tableau_bordController extends Controller
{
    public function index()
    {
    	 $client= User::all();
    	 $produits= Produit::all();
    	 $categorie = Categories::all();
         $commande = Commande::all();
         $contact = Contact::all();
      
        return view('tableau_bord.index', compact('client', 'produits', 'categorie','client', 'commande', 'contact'));
    }

    public function contact()
    {
       $contact = Contact::all();
       $categorie = Categories::all();
       $produits = Produit::all();
       $user = User::all();
       $client= User::all();
       $commande = Commande::all();
        return view('tableau_bord.contactez_nous', compact('contact', 'produits', 'user', 'categorie', 'client', 'commande'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

              return redirect()->route('tableau_bord.contactez_nous')->with('success', 'Utilisateur supprimé avec succès !');
            
    }


    public function commande()
    {
        
        $produits=Produit::all();
        $user= User::all();
        $categorie = Categories::all();
        $panier = Panier::all();
        $contact = Contact::all();
        $client= User::all();
        $commande= Commande::all();

        return view('tableau_bord.commande', compact('contact', 'produits', 'user', 'categorie', 'client','commande','panier'));

    }

    public function destroyCommande(Commande $commande)
    {
        $commande->delete();

              return redirect()->route('tableau_bord.commande')->with('success', 'Utilisateur supprimé avec succès !');
            
    }
       
 }

