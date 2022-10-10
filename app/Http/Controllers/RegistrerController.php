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
            'name'     => ['required', 'max:30'],
            'username' => ['required', 'unique:users', 'min:3','max:30'],
            'email'    => ['required', 'unique:users', 'email', 'max:30'],
            'password' => ['required', 'min:8'],
            'password_confirmation' =>''

         
         ]);

     }
}
