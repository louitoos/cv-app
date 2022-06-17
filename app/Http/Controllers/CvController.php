<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function creation(){
        return view('cv');
    }

    public function PageA(Request $request){
        $temp = $request->validate([
            'name'=> 'required|string|min:4',
            'prenom'=> 'required|string|min:4',
            'age'=> 'required|',
            'civilité'=>'required',
            'diplome'=> 'required|string',
            'experience'=> 'required|string',
            'tel'=>'required|',
            'email'=>'required|email'
        ]);
        $id = $request->user()->id;
        $Cv = new Cv;
        $Cv->fill([
            'first_name' => $temp['prenom'], 
            'last_name' => $temp['name'],
            'year' =>  $temp['age'],
            'degree' => $temp['diplome'],
            'experience' => $temp['experience'],
            'gender' => $temp['civilité'],
            'phone' => $temp['tel'],
            'email' => $temp['email'],
            'user_id'=> $id,
        ]);
        $Cv->save();
    }
}
