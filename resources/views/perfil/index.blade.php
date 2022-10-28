@extends('layouts.app')

@section('titulo')

    Editar Perfil: {{auth()->user()->username}}

@endsection


@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="" class="mt-10 md:mt-0">
                <div class="mb-5x">
                    <label for="username"  class="mb-2 block uppercase text-gray-500 font-bold">
                        UserName
                    </label>
                    <input 
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Nombre Usuario"
                    class="border p-3 w-full rounded-lg
                    @error('username')
                    border-red-600
                    @enderror"
                    value="{{ auth()->user()->username }}"
                    />
                </div>
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                    </p>
                    @enderror

                    <div class="mb-5x">
                        <label for="imagen"  class="mb-2 block uppercase text-gray-500 font-bold">
                            Imagen Perfil
                        </label>
                        <input 
                        type="file"
                        id="imagen"
                        name="imagen"
                        class="border p-3 w-full rounded-lg"
                        accept=".jpg, .jpeg, .png"
                        />
                    </div>

                    <input 
                    type="submit" 
                    value="Guardar cambios" 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg mt-10"
                />
            </form>
        </div>
    </div>

@endsection