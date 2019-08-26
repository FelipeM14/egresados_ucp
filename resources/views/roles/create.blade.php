@extends('layouts.app')

@section('title')
    Administrar roles
@endsection

@section('content')

    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('roles.store') }}" method="post">
                <div class="card">
                    <div class="card-header">
                        Nuevo rol
                    </div>

                    <div class="card-body">

                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="name">Nombre del rol</label>
                                <input class="form-control" required placeholder="Nombre..." type="text" name="name" id="name" value="{{ old('name') }}">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success mr-1">Agregar</button>
                        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
