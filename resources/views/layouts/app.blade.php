<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-slate-900 text-white">

        <div class="w-1/5 px-12 mr-auto">
            <p class="text-2xl font-bold">Prueba Laravel</p>
        </div>

        <ul class="w-auto px-10 ml-auto flex justify-end">

        @if (auth()->check())
            <li>
                <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>
            </li>

            <li class="mx-2">
                <a href="{{ route('users.index') }}" class="font-bold hover:text-blue-800 hover:border-blue-800
                bg-slate-800 border-2 border-blue-500 rounded-xl py-3 px-2">Lista Usuarios</a>
            </li>

            <li class="mx-2">
                <a href="{{ route('front.index') }}" class="font-bold hover:text-yellow-600 hover:border-yellow-600
                bg-slate-800 border-2 border-yellow-500 rounded-xl py-3 px-2">Prueba Front</a>
            </li>

            <li class="mx-2">
                <a href="{{ route('orders.index') }}" class="font-bold hover:text-green-600 hover:border-green-600
                bg-slate-800 border-2 border-lime-500 rounded-xl py-3 px-2">CRUD Orders</a>
            </li>

            <li class="mx-2">
                <a href="{{ route('ordersdetails.index') }}" class="font-bold hover:text-purple-600 hover:border-purple-600
                bg-slate-800 border-2 border-purple-500 rounded-xl py-3 px-2">CRUD Orders_Details</a>
            </li>

            <li class="mx-2">
                <a href="{{ route('login.destroy') }}" class="font-bold hover:text-red-800 hover:border-red-800
                bg-slate-800 border-2 border-red-500 rounded-xl py-3 px-4">Cerrar Sesión</a>
            </li>

            
        @else
            <li class="mx-6">
                <a href="{{ route('login.destroy') }}" class="font-semibold hover:text-blue-800 hover:border-blue-800
                bg-slate-800 border-2 border-slate-500 rounded-xl py-3 px-4">Iniciar Sesion</a>
            </li>
            <li>
                <a href="{{ route('register.index') }}" class="font-semibold hover:text-green-500 hover:border-green-800 bg-slate-800 border-2 border-slate-500 rounded-xl py-3 px-4">Registrarse</a>
            </li>
        @endif
        </ul>
    </nav>
    <br>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>