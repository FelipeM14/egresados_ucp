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
                                            Orden en la lista
                                        </label>
                                        <input class="form-control" type="number" name="order" id="order" value="{{ old('order') }}" placeholder="Orden">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status">
                                            Seleccione un estado
                                        </label>
                                        <select name="status" id="status" required class="form-control">
                                            <option @if(old('status', 1) == 1) selected @endif value="1">Activa</option>
                                            <option @if(old('status', 1) == 0) selected @endif value="0">Inactiva</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-size">
                                        <label for="order">
                                            Tamaño de la columna
                                        </label>
                                        <input class="form-control" type="number" name="size" id="size" value="{{ old('size', 150) }}" placeholder="Tamaño...">
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
                                                <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
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
