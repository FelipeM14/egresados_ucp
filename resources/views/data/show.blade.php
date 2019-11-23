@extends('layouts.app')

@section('title')
    Datos egresados
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <input type="hidden" id="graduate_app" value="1">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    {{ $graduate->nombre_y_apellidos.' --> '. $graduate->codigo }}
                </div>
                <div class="card-body">

                    <form id="frm_category" action="{{ route('graduate.show', ['graduate_id' => $graduate->id]) }}" method="get">
                        <div class="input-group mb-3">
                            <select class="custom-select" id="category_id" name="category_id">
                                <option value="">Seleccionar una categoría</option>
                                @foreach($categories as $category)
                                    @can($category->name.' ver')
                                        <option @if($category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endcan
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="submit">Buscar datos</button>
                            </div>
                        </div>
                    </form>


                    <form action="{{ route('graduate.update', ['graduate_id' => $graduate->id]) }}" method="post">
                        @csrf
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
                                <a href="{{ route('data.update') }}" class="btn btn-outline-secondary">Regresar</a>
                                <input type="hidden" name="category" value="{{ $category_id }}">
                                <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
