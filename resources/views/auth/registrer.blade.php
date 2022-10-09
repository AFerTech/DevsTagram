@extends('layouts.app')

@section('titulo')
    Registrate en DevsTagram
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Imagen</p>
        </div>
        <div class="md:w-1/2">
            <form action="">
                <div class="mb-5x">
                    <label for="" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Nombre"
                    class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5x">
                    <label for="" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Nombre"
                    class="border p-3 w-full rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection