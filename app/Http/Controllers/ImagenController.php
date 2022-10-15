<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $img = $request->file('file');

        $nombreImg = Str::uuid() . "." . $img->extension();

        $imgServidor =Image::make($img);
        $imgServidor->fit(1000,1000, null, 'center');

        $imgPath = public_path('uploads') . '/' . $nombreImg;

        $imgServidor->save($imgPath);

        return response()->json(['img' => $nombreImg]);
    }
}
