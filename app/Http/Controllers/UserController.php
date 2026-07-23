<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function connexion(){
        return view('auth.signin');
    }

    public function connexion_traitement(Request $request){
        // Toujours valider les données saisies ,validate est mieux que only
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('/acceuil')->with('status', 'Vous êtes connectés');
        }
        return back()->OnlyInput('email')->with('status', 'Votre email ou mot de passe est incorrecte');
    }

    public function inscription(){
        return view('auth.signup');
    }

    public function inscription_traitement(InscriptionRequest $request){
        $user =  User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        return redirect('/connexion')->with('success', 'Votre compte a été crée avec succès!');
    }
}
