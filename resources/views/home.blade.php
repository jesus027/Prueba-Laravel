@extends('layouts.app')

@section('title', 'home')

@section('content')

    <h1 class="text-5xl bold text-center pt-4">Bienvenido</h1>

    <div class="container-fluid text-center max-w-6xl mx-auto md:w-1/2 py-20 px-12 lg:px-24 shadow-xl mb-24">
        <form class="bg-slate-900 text-white mt-6 p-10 flex-col flex" action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="m-4">
                    <strong class="border border-green-500 rounded-md bg-green-100 w-full text-green-600 p-2 my-2">{{ $message }}</strong>
                </div>
            @endif
    
            @if ($errors->has('file'))
                <div class="m-4">
                    <strong class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{ $errors->first('file') }}</strong>
                </div>
            @endif
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">Selecciona el Archivo que quieres Subir </label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" multiple type="file" name="file" id="file" accept=".pdf">
            <input class="mt-3 md:w-full bg-red-900 text-white font-bold py-2 px-2 border-b-3 hover:border-b-2 border-red-500 hover:border-red-100 rounded-full" type="submit" value="Subir PDF">
        </form>
    </div>

@endsection