@extends('layouts.app')

@section('title')
   Actualizacion de datos
@endsection

@section('content')

    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Actualizacion De Datos
                    </div>

                    <form action="{{ route('upgrade.update',['upgrade' => $update1->id]) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Nombre: *
                                        </label>
                                        <input class="form-control" type="text" name="correoelctronico" id="correoelectronico" value="{{ old('correoelectronico', $actualizciondato->correoelectronico) }}" placeholder="Correo_Electronico...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="last_name">
                                            Correo Electronico: *
                                        </label>
                                        <input class="form-control" type="email" name="correo_electronico" id="correo_electronico" value="{{ old('last_name', $actualizaciondato->last_name) }}" placeholder="Apellidos...">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="document_type">
                                            Tipo de documento: *
                                        </label>
                                        <select class="form-control" name="document_type" id="document_type" >
                                            <option value="">Seleccionar</option>
                                            <option @if(old('document_type', $update1->document_type) == 'C.C.') selected @endif value="C.C.">Cédula de ciudadanía</option>
                                            <option @if(old('document_type', $update1->document_type) == 'C.E.') selected @endif value="C.E.">Cédula de Extranjería</option>
                                            <option @if(old('document_type', $update1->document_type) == 'T.I.') selected @endif value="T.I.">Tarjeta de Identidad</option>
                                            <option @if(old('document_type', $update1->document_type) == 'P.A.') selected @endif value="P.A.">Pasaporte</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="document_number">
                                            Número de documento: *
                                        </label>
                                        <input class="form-control" type="text" name="document_number" id="document_number" value="{{ old('document_number', $actualizaciondato->document_number) }}" placeholder="Número de documento...">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">
                                            Correo electrónico: *
                                        </label>
                                        <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $actualizaciondato->email) }}" placeholder="Correo electrónico...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="active">
                                            Estado: *
                                        </label>
                                        <select class="form-control" name="active" id="active" >
                                            <option value="">Seleccionar</option>
                                            <option @if(old('active', $update1->active) == '1') selected @endif value="1">Habilitado</option>
                                            <option @if(old('active', $update1->active) == '0') selected @endif value="0">Inhabilitado</option>
                                        </select>
                                    </div>

                                </div>
                         </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-1">Guardar cambios</button>
                            <a href="{{ route('update.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
