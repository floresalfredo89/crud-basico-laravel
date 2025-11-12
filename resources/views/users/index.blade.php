@extends('layouts.app')

@section('content')
<div class="d-flex flex-row-reverse mb-4">
    <a href="{{route('users.create')}}" class="btn btn-success">Crear nuevo usuario</a>
</div>
<div class="card">
    <div class="card-header">
        <h4>Listado de usuarios</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Fecha de alta</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('users.show',$user)}}" class="btn btn-primary d-inline me-2">Ver</a>
                                <a href="{{route('users.edit',$user)}}" class="btn btn-secondary d-inline me-2">Editar</a>
                                <form action="{{route('users.destroy',$user)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger d-inline me-2" type="submit">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
