<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UsersStoreRequest;
use App\Models\Produit;
use App\Models\Categories;
use App\Models\Commande;
use App\Models\Contact;


class UsersController extends Controller
{


	 public function index()
    {
        $admin = User::where('role', "Admin")-> get();
        $produits=Produit::all();
        $client= User::all();
        $categorie = Categories::all();
        $commande = Commande::all();
        $contact = Contact::all();



        return view('user.index', compact('admin','produits', 'client', 'categorie', 'commande', 'contact'));
    }

    public function indexClient()
    {
        $client = User::where('role', "Client")-> get();
         $produits=Produit::all();
         $categorie = Categories::all();
         $commande = Commande::all();
         $contact = Contact::all();


        return view('user.indexClient', compact('client', 'produits', 'categorie','commande','contact'));
    }

    public function create(){

    		 $client = User::where('role', "Client")-> get();
         $produits=Produit::all();
          $categorie = Categories::all();
          $commande = Commande::all();
          $contact = Contact::all();
 

    	return view('user.create', compact('produits', 'client', 'categorie','commande','contact'));
    }
    

    public function store(UsersStoreRequest $request)
    {


        $admin = User::create($request->all());


        if($admin->role == "Admin")
        {

        return redirect()->route('user.index')->with('success', 'Admin ajouté avec succès !');
    	}
    	else
    	{
    		return redirect()->route('user.indexClient')->with('success', 'Client ajouté avec succès !');
    	}
    }


    public function edit(User $user)
    {
    	 $produits=Produit::all();
         $client= User::all();
          $categorie = Categories::all();
          $commande = Commande::all();
          $contact = Contact::all();
 
        return view('user.edit', compact('user', 'produits', 'client', 'categorie','commande','contact'));
    }

    public function update( UsersStoreRequest $request, User $user)
    {
        $user->update($request->all());

        if($user->role == "Admin"){


        return redirect()->route('user.index')->with('success', 'Admin mis à jour avec succès !');}
        else{
        		return redirect()->route('user.indexClient')->with('success', 'Client mis à jour avec succès !');
        }
    }

    public function destroy(User $user)
    {
        $user->delete();

        if($user->role == "Admin"){
        return redirect()->route('user.index')->with('success', 'Utilisateur supprimé avec succès !');}
        else{
        	return redirect()->route('user.indexClient')->with('success', 'Utilisateur supprimé avec succès !');
        }
    }

}
