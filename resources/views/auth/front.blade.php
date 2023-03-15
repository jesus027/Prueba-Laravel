@extends('layouts.app')

@section('title', 'Front-End')

@section('content')
    <div class="flex container align-center">
        <div class="m-auto p-2">
            <h1 class="font-bold text-2xl mt-2">Información Sobre Rick Sanches.</h1>
            <p class="font-bold text-2xl">Rick and Morty.</p>
            <h1 class="font-bold text-lg text-gray-700 mt-4">Nombre</h1>
            <div class="text-sm text-slate-500 mt-2">{{$api['name']}}</div>
            <h1 class="font-bold text-lg text-gray-700 mt-4">Genero</h1>
            <div class="text-sm text-slate-500 mt-2">{{$api['gender']}}</div>
            <h1 class="font-bold text-lg text-gray-700 mt-4">Lugar de Origen</h1>
            <div class="text-sm text-slate-500 mt-2">{{$api['origin']['name']}}</div>
            <h1 class="font-bold text-lg text-gray-700 mt-4">Localización</h1>
            <div class="text-sm text-slate-500 mt-2">{{$api['location']['name']}}</div>
            <h1 class="font-bold text-lg text-gray-700 mt-4">Estado en el que se Encuentra</h1>
            <div class="text-sm text-slate-500 mt-2">{{$api['status']}}</div>
            <h1 class="font-bold text-lg text-gray-700 mt-4">Apariencia</h1>
            <img class="mt-2 img-thumbnail w-20 h-24" src="{{$api['image']}}" alt="Rick">
            <div class="btn-toolbar" role="toolbar">
                <div class="mt-2">
                    <h1 class="font-bold text-lg text-gray-700 mt-4">Start Building:</h1>
                    <div class="btn-group">
                        <button class="border border-gray-200 py-2 px-20 shadow-md" type="button" class="btn"><i class="bi bi-puzzle text-primary text-3xl"></i> Apps</button>
                    </div>
                    <div class="btn-group">
                        <button class="border border-gray-200 py-2 px-20 shadow-md" type="button" class="btn"><i class="bi bi-brush text-danger text-3xl"></i> Themes</button>
                    </div>
                    <div class="mt-2">
                        <div class="btn-group">
                            <button class="border border-gray-200 py-2 px-16 shadow-md" type="button" class="btn"><i class="bi bi-shop-window text-success text-2xl"></i> Storefronts</button>
                        </div>
                        <div class="btn-group">
                            <button class="border border-gray-200 py-2 px-16 shadow-md" type="button" class="btn"><i class="bi bi-shop text-warning text-2xl"></i> Marketplace</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 mr-6">
            <img class="w-96 h-screen" src="https://pm1.narvii.com/6606/7d71025b4813316f77f40e9d98f5b28f25690296_00.jpg" alt="foto">
        </div>
    </div>
    <div class=" flex container-fluid my-2 col-lg-10 p-10 place-content-center rounded rounded-md shadow-lg" style="background-color:#eafaf3">

        
            <div class="pr-16 col-md-6 mt-4">
                <h1 class="font-bold text-2xl">Launch your app or theme to millions or merchants.</h1> 
                <div>
                    <h3 class="font-bold text-gray-700 text-xl mt-2">App Store:</h3>
                    <p class="text-sm text-slate-500 mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse obcaecati facilis tempore! Tempore id ipsa dolore obcaecati alias hic, suscipit laudantium, <span class="underline text-slate-500"> facilis commodi eaque </span> doloribus quaerat architecto temporibus dicta labore.</p>
                </div>
                <div>
                    <h3 class="font-bold text-xl text-gray-700 mt-2">Theme Store</h3>
                    <p class="text-sm text-slate-500 mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptas nisi, eos, illum hic voluptatibus mollitia nulla cum labore iure incidunt magnam <span class="underline text-slate-500"> facilis commodi eaque </span>  nihil inventore unde praesentium minus.</p>
                </div>
            </div>
        
        <div class="flex-shrink-0" style="background-color:#eafaf3">
            <img class="w-72 h-96" src="https://poptv.orange.es/wp-content/uploads/sites/3/2018/03/Rick-and-Morty-3p.jpg" alt="foto">
        </div>
    
    </div>
    
@endsection