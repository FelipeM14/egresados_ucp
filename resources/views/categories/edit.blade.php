@extends('layouts.app')

@section('title')
    Nueva categoría
@endsection

@section('content')

    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar categoría
                    </div>

                    <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body pb-0">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">
                                            Nombre categoria
                                        </label>
                                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $category->name) }}" placeholder="Título columna...">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="color">
                                            Seleccione un color
                                        </label>
                                        <input type="color" value="{{ old('color', $category->color) }}" name="color" id="color" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="color_text">
                                            Color del texto
                                        </label>
                                        <input type="color" value="{{ old('color_text', $category->color_text) }}" name="color_text" id="color_text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="order">
                                            Orden de vista
                                        </label>
                                        <input class="form-control" type="number" name="order" id="order" value="{{ old('order', $category->order) }}" placeholder="Orden">
                                    </div>
                                </div>

                            </div>

                         </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-1">Guardar cambios</button>
                            <a href="javascript:history.back()" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
