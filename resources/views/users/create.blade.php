@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">
                    <h4>Crear nuevo usuario</h4>
                </div>

                <div class="card-body">
                   <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nombre de usuario</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                    </div>
                    @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                    </div>
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                    </div>
                    @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="password_confirmation" class="form-label">Confirma la contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>


@endsection
