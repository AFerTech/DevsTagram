<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('perfil.index');
    }
    public function store(Request $request)
    {
        // Modificar el request
        $request->request->add(['username' => Str::slug($request->username)]);
        
        $this->validate($request,[
            'username' => [
                'required', 
                'unique:users,username,'. auth()->user()->id, 
                'min:3','max:30', 
                'not_in:twitter,instagram,editar-perfil', 
                // 'in:CLIENTE,PROVEEDOR'
            ],
        ]);
        if($request->img){
            $img = $request->file('img');

            $nombreImg = Str::uuid() . "." . $img->extension();
    
            $imgServidor =Image::make($img);
            $imgServidor->fit(1000,1000, null, 'center');
    
            $imgPath = public_path('perfiles') . '/' . $nombreImg;
    
            $imgServidor->save($imgPath);
        }

        // Guardar cambios

        $usuario = User::find(auth()->user()->id);

        $usuario->username = $request->username;
        $usuario->img = $nombreImg ?? auth()->user()->img ?? null;
        $usuario->save();

        // Redireccion
        return redirect()->route('posts.index', $usuario->username);
    }
}
