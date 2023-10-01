<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Panier;
class ConnexionController extends Controller
{
	public function index()
	{
		if (Auth::check()) {
			return redirect()->route('home');
		}
		return view('connexion.index');
	}


    public function connecter(Request $request)
    {
    	$valideDonnee= Validator::validate($request->all(),[

    		
    		'email' => 'required',
    		'password' => 'required|min:8',
    	]);



    	if (Auth::attempt($valideDonnee)) {
        // L'authentification a réussi, redirigez l'utilisateur vers la page d'accueil
     
     		$role= Auth::User()-> role;
     		if ($role =="Admin") {
     			   return redirect()->route('tableau_bord.index')-> with('success','Connexion reussie');
     		}
     		else
     		{
     			return redirect()->route('home')-> with('success','Connexion reussie');
     		}
    }

     // Les identifiants de connexion sont incorrects, renvoyez un message d'erreur
    return back()->with(
       'success', 'Les données de connexion sont incorrectes.',
    );

    }



public function deconnecter()
{
	// Supprimer tous les produits du panier de l'utilisateur actuellement connecté
	if (Auth::check()) {
		Panier::clearUserPanier(Auth::id());
	}

	// Déconnexion de l'utilisateur
	Auth::logout();

	return redirect()->route('home');
}

    
}
