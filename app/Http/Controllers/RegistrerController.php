<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

         // Modificar el request
         $request->request->add(['username' => Str::slug($request->username)]);


         // Validacion
         $this->validate($request,[
            'name'     => ['required', 'max:30'],
            'username' => ['required', 'unique:users', 'min:3','max:30'],
            'email'    => ['required', 'unique:users', 'email', 'max:30'],
            'password' => ['required', 'min:8', 'confirmed']
            // 'password_confirmation' => ['required']

         
         ]);


         User::create([
            'name' =>$request->name,
            'username' =>$request->username,
            'email' => $request->email,
            'password' =>Hash::make($request->password)
         ]);
         // autenticar usuario
         // auth()->attempt([
         //    'email' => $request->email,
         //    'password' =>$request->password
         // ]);
         // forma 2
         auth()->attempt($request->only('email', 'password'));
         // redireccionar 
         return redirect()->route('posts.index',[
            auth()->user()->username
         ]);
     }
}
