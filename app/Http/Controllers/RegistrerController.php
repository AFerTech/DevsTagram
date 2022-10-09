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
     public function store (Request $request)
     {
      //   dd($request);
         // dd($request->get('username'));

         // Validacion
         $this->validate($request,[
            'name'     => 'required|min:5',
            'username' => '',
            'email'    => '',
            'password' => '',
            'password_confirmation' =>''

         
         ]);

     }
}
