@extends('layouts.app')


@section('titulo')
 Crear publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            Imagen Aquí
        </div>
        <div class="md:w-1/2 px-10 bg-white p-6 rounded-lg shadow-2xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST" >
                @csrf
                <div class="mb-5x">
                    <label for="name"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Nombre"
                    class="border p-3 w-full rounded-lg @error('name')
                    border-red-600
                    @enderror"
                    value="{{old ('name')}}"
                    />                    
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                    </p>
                    @enderror
                </div>
            </form>
        </div>

    </div>
@endsection