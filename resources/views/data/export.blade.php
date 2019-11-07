@extends('layouts.app')

@section('title')
    Exportar datos
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <input type="hidden" id="graduate_app" value="1">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border ">
                    Exportar datos
                </div>
                <div class="card-body">

                    <div class="card mb-0">
                        <div class="card-body">
                            <h5 class="card-text">Exportar graduados</h5>
                            <p class="card-text">Exporte la información de todos los graduados de la base de datos en un archivo de Excel.</p>
                            <a href="{{ route('graduates.export') }}" class="btn btn-success btn-sm">Exportar graduados</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
