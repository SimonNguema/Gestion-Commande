<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use App\Models\User;


class InscriptionController extends Controller
{
     public function index()
    {
        return view('inscription.index');
    }

    public function enregistrer(Request $request)
    {
    	$valideDonnee= Validator::validate($request->all(),[

    		'name' => 'required|min:3',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:8',
    	]);


    	$user = User::create([

    		'name' => $valideDonnee['name'],
    		'email'=> $valideDonnee['email'],
    		'password'=> Hash::make($valideDonnee['password']),
    		
    	]);

    	// Redirection de l'utilisateur vers la page de connexion
    return redirect()->route('connexion')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
    }
}
