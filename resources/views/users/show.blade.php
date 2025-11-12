@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">
                    <h4>Datos de usuario</h4>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>ID</strong> {{$user->id}}</li>
                        <li class="list-group-item"><strong>Nombre de usuario</strong> {{$user->name}}</li>
                        <li class="list-group-item"><strong>Correo electrónico</strong> {{$user->email}}</li>
                        <li class="list-group-item"><strong>Fecha de registro</strong> {{$user->created_at}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
