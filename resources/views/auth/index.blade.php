@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-bordered">
            <caption class="text-center">Lista de Usuarios Registrados</caption>
            <thead class="text-primary text-center">
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="text-center">
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->apellido}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            </tbody>
            <div class="card-footer mr-auto">
                {{$users->links()}}
            </div>
        </table>
    </div>
</div>


@endsection