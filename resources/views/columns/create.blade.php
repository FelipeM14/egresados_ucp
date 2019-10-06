@extends('layouts.app')

@section('title')
    Nueva columna
@endsection

@section('content')

    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Nueva columna
                    </div>

                    <form action="{{ route('columns.store') }}" method="post">
                        @csrf
                        <div class="card-body pb-0">

                            <div class="row mb-3">
                                <div class="col">
                                    <a href="{{ route('categories.create') }}" class="btn btn-success">Nueva categoría</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="title">
                                            Ingrese el título de la columna
                                        </label>
                                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Título columna...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="order">
                                            Prioridad en la lista
                                        </label>
                                        <input class="form-control" type="number" name="order" id="order" value="{{ old('order') }}" placeholder="Prioridad">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="category_id">
                                            Seleccione una categoría
                                        </label>
                                        <select class="form-control" name="category_id" id="category_id" >
                                            <option value="">Seleccionar</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                         </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-1">Agregar</button>
                            <a href="{{ route('data.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
