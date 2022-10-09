<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrerController extends Controller
{
    //
    public function index ()
     {
        return view('auth.registrer');
     }
}
