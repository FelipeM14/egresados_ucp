@extends('layouts.app')

@section('title')
    Categorías
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Categorías
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th colspan="7">
                                    <a href="{{ route('categories.create') }}" class="btn btn-success">
                                        Nueva categoría
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Color de fondo / Texto</th>
                                <th>Orden</th>
                                <th>Acción</th>
                            </tr>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td><div style="background-color: {{ $category->color }}; color: {{ $category->color_text }}">Texto</div></td>
                                    <td>{{ $category->order }}</td>
                                    <td><a href="{{ route('categories.edit',['category' => $category->id]) }}" class="btn btn-sm btn-warning">Editar</a></td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
