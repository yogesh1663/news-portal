<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function landingPage(){
        return view('front-view');
    }
}
