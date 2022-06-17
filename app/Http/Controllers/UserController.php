<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserView(){
      return view('inscription');
    }  

    public function accueil(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|same:password_confirm'
        ]);
       
        $user = new User;
        $user->fill($data);
        $user->password = Hash::make($data['password']);
        $user->save();

        if($data){
            return redirect('/mon-compte');
        }
    }
}
