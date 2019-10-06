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
                    Datos egresados
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th colspan="700">
                                    <a href="{{ route('columns.create') }}" class="btn btn-success">
                                        Nueva columna
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th class="py-5 text-center">#</th>
                                @foreach($columns as $column)
                                    <th class="py-5 text-center" style="background-color: {{ $column->color }}; color: {{ $column->color_text }}">{{ $column->title }}</th>
                                @endforeach
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
