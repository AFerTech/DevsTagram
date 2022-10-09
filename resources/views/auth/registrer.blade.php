@extends('layouts.app')

@section('titulo')
    Registrate en DevsTagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-5">
        <div class="md:w-4/12 p-5">
            <img src="{{asset ('img/registrar.jpg')}}" alt="Imagen registro usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
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
                    class="border p-3 w-full rounded-lg">
                    
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                    </p>
                @enderror
                
                </div>

                <div class="mb-5x">
                    <label for="username"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de Usuario
                    </label>
                    <input 
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Nombre de Usuario"
                    class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5x">
                    <label for="email"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Correo"
                    class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5x">
                    <label for="password"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraeña
                    </label>
                    <input 
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Contraseña"
                    class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5x">
                    <label for="password_confirmation"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir contraseña
                    </label>
                    <input 
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Repetir contraseña"
                    class="border p-3 w-full rounded-lg">
                </div>

                <input 
                type="submit" 
                value="Crear cuenta" 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg mt-10">
            </form>
        </div>
    </div>
@endsection