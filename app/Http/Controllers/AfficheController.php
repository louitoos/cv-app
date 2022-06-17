<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class AfficheController extends Controller
{
    public function affcv()
    {
        $cvs= Cv::get();
        return view('aff_cv', compact('cvs'));
    }

    public function displayOne($id){
        $cv = Cv::find($id);
        return view('onecv', compact('cv') );
    }
}
