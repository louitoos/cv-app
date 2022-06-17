<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionControler extends Controller
{
    public function formulaire(){
        return view('connexion');
    }

    public function traitement(Request $Request){
        $data = $Request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $resultat = auth() ->attempt([
            'email' => request('email'),
            'name' => request('name'),
            'password' => request('password'),
        ]);

        if($resultat){
            return redirect('/mon-compte');
        }

        return back()-> withInput()->withErrors([
            'email' => 'Identifiants Incorrects '
        ]);
    }
}
