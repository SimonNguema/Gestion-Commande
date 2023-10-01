<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\User;
use App\Models\Produit;
use App\Models\Categories;

class ContactController extends Controller
{
 public function index()
 {
	$contact = Contact::all();
	$categorie = Categories::all();
	$produits = Produit::all();
	$user = User::all();
 	return view('contact.index', compact('contact', 'produits', 'user', 'categorie'));
 }


 public function envoyerMessage(Request $request)
    {
		
		$validatedData = $request->validate([
			'nom' => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'sujet' => 'required|string|max:255',
			'message' => 'required|string',
		]);

       
		$contact = new Contact();
		$contact->nom = $validatedData['nom'];
		$contact->email = $validatedData['email'];
		$contact->sujet = $validatedData['sujet'];
		$contact->message = $validatedData['message'];

		// Récupérer l'utilisateur connecté et associer le contact à l'utilisateur
		$user = Auth::user();
		$contact->users_id = $user->id;
	
		$contact->save();
        

        
        return redirect()->back()->with('success', 'Votre message a été envoyé. Merci !');
    }
}


