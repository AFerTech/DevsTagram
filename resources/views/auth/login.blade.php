@extends('layouts.app')

@section('titulo')
    Inicia Sesión en DesvsTagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-5">
        <div class="md:w-4/12 p-5">
            <img src="{{asset ('img/login.jpg')}}" alt="Imagen login usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <form novalidate >
                
                @csrf {{-- Proteccion --}}
                
                <div class="mb-5x">
                    <label for="email"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Correo"
                    class="border p-3 w-full rounded-lg
                    @error('email')
                    border-red-600
                    @enderror"
                    value="{{old ('email')}}"
                    />
                </div>
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                    </p>
                    @enderror
                

                <div class="mb-5x">
                    <label for="password"  class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraeña
                    </label>
                    <input 
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Contraseña"
                    class="border p-3 w-full rounded-lg
                    @error('password')
                    border-red-600
                    @enderror
                    "/>
                </div>
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                    </p>
                    @enderror
            
                <input 
                type="submit" 
                value="Iniciar Sesión" 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg mt-10"
                />
            </form>
        </div>
    </div>
@endsection