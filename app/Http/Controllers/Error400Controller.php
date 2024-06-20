<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Error400Controller extends Controller
{
    public function index(){
        return view('erro400');
    }
}
