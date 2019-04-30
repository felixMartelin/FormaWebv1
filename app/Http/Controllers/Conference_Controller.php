<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\Conference;

class Conference_Controller extends Controller
{
    //
    public function getLesConferences()
    {
        $conference=new Conference();
        $lesConferences= $conference->getLesConferences();
        return view('listeConferences',compact('lesConferences'));
    }
}
