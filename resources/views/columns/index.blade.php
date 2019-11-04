@extends('layouts.app')

@section('title')
    Columnas
@endsection

@section('content')

    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Columnas
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th colspan="3">
                                    <a href="{{ route('columns.create') }}" class="btn btn-success">Nueva columna</a>
                                    <a href="{{ route('data.index') }}" class="btn btn-secondary">Regresar</a>
                                </th>
                            </tr>
                            <tr>
                                <th>Columna</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                            @foreach($columns as $column)
                                @php(($column->status) ? $status = 'Activa' : $status = 'Inactiva')
                                <tr>
                                    <td>{{ $column->title }}</td>
                                    <td>{{ $status }}</td>
                                    <td><a href="{{ route('columns.edit', ['column' => $column->id]) }}" class="btn btn-sm btn-outline-warning">Editar</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
