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
                    <label for="titulo"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Título
                    </label>
                    <input 
                    type="text"
                    id="titulo"
                    name="titulo"
                    placeholder="Título"
                    class="border p-3 w-full rounded-lg @error('titulo')
                    border-red-600
                    @enderror"
                    value="{{old ('titulo')}}"
                    />                    
                    @error('titulo')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                    </p>
                    @enderror
                </div> {{--titulo--}}
                <div class="mb-5x">
                    <label for="descricion"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>
                    <textarea 
                    id="descricion"
                    name="descricion"
                    placeholder="Descripción"
                    class="border p-3 w-full rounded-lg @error('descripcion')
                    border-red-600
                    @enderror"
                    >{{old ('descricion')}}</textarea>                    
                    @error('descricion')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                    </p>
                    @enderror
                </div>  {{--descripcion--}}
                <input 
                type="submit" 
                value="Publicar" 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg mt-10">
            </form>
        </div>

    </div>
@endsection