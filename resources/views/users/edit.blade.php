@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">
                    <h4>Editar usuario</h4>
                </div>

                <div class="card-body">
                   <form action="{{route('users.update',$user)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nombre de usuario</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name',$user->name)}}">
                    </div>
                    @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" id="email" value="{{old('email',$user->email)}}" class="form-control @error('email') is-invalid @enderror">
                    </div>
                     @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <div class="d-flex flex-row-reverse">
                        <button class="btn btn-success mt-2 mb-3" type="submit">Guardar cambios</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>


@endsection
