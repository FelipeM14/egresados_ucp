
@extends('layouts.app_auth')

@section('title')
    Datos egresados
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <div class="container">
        <img src="{{ asset('img/bg-img/graduados_2.jpg') }}" alt="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header bg-success text-white">
                        Encuesta de actualización de datos para graduados
                    </div>
                    <div class="card-body">

                        <div class="alert alert-success">
                            La siguiente es una encuesta realizada con el fin de actualizar los datos de los estudiantes egresados de nuestra universidad. Por favor diligenciarla para que podamos mantenernos en contacto.
                        </div>

                        <h1>{{ $graduate->nombre_y_apellidos }}</h1>

                        <form action="{{ route('actualization.update', ['graduate_id' => $graduate->id]) }}" method="post">

                            @csrf()
                            {{ method_field('PUT') }}

                            <div class="card mb-3">
                                <div class="card-body pb-0">
                                    @foreach($cols as $col)
                                        @php($name = $col->name)
                                        <div class="form-group">
                                            <label for="">{{ $col->title }}</label>
                                            <input class="form-control" name="{{ $col->name }}" id="{{ $col->name }}" value="{{ $graduate->$name }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('search') }}" class="btn btn-outline-secondary">Regresar</a>
                                    <button type="submit" class="btn btn-outline-success">Enviar encuesta</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection



