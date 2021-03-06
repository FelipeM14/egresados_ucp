@extends('layouts.app')

@section('title')
    Administrar usuarios
@endsection

@section('content')

    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Nuevo Usuario
                    </div>

                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Nombre: *
                                        </label>
                                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="last_name">
                                            Apellidos: *
                                        </label>
                                        <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="Apellidos...">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="document_type">
                                            Tipo de documento: *
                                        </label>
                                        <select class="form-control" name="document_type" id="document_type" >
                                            <option value="">Seleccionar</option>
                                            <option @if(old('document_type') == 'C.C.') selected @endif value="C.C.">Cédula de ciudadanía</option>
                                            <option @if(old('document_type') == 'C.E.') selected @endif value="C.E.">Cédula de Extranjería</option>
                                            <option @if(old('document_type') == 'T.I.') selected @endif value="T.I.">Tarjeta de Identidad</option>
                                            <option @if(old('document_type') == 'P.A.') selected @endif value="P.A.">Pasaporte</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="document_number">
                                            Número de documento: *
                                        </label>
                                        <input class="form-control" type="text" name="document_number" id="document_number" value="{{ old('document_number') }}" placeholder="Número de documento...">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">
                                            Correo electrónico: *
                                        </label>
                                        <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Correo electrónico...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="role">
                                            Rol: *
                                        </label>
                                        <select class="form-control" name="role" id="role" >
                                            <option value="">Seleccionar</option>
                                            @foreach($roles as $role)
                                                <option @if($role->id == old('role')) selected @endif value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-1">Agregar</button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
