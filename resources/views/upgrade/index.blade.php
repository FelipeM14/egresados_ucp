@extends('layouts.app')

@section('title')
    Actualizacion De Datos
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

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th colspan="7">
                                    <a href="{{ route('update.index') }}" class="btn btn-success">
                                        Actualizacion De Datos
                                    </a>
                                </th>
                            </tr>
                            <tr>

                                <th>Telefono</th>
                                <th>Correo electrónico</th>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="actividad_type">
                                                Em que actividad ocupa la mayor parte del tiempo: *
                                            </label>
                                            <select class="form-control" name="actividad_type" id="actividad_type" >
                                                <option value="">Seleccionar</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Trabajando</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Emprendiendo</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Dueño o Socio de la epresa</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Trabajo Obra Labor</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Trabajando y Estudiando</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Buscando Empleo</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Buscando Otro Empleo</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Estado Sabatico</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Oficios Del Hogar</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Licencia De Maternidad</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Voluntariado</option>
                                                <option @if(old('actividad_type', $update1->actividad_type) == '') selected @endif value="">Pensionado(a)</option>

                                            </select>
                                        </div>
                                    </div>

                                <th>Empresa En la que labora</th>
                                <th>Cargo Que Ocupa</th>

                          </tr>
                        <!-- @foreach($update as $update1)-->
                                @php($update1->active ? $active = 'Habilitado' : $active = 'Inhabilitado')
                                <tr>
                                    <td class="text-nowrap">{{ $update1->telefono }}</td>
                                    <td class="text-nowrap">{{ $update1->correo_electronico }}</td>
                                    <td class="text-nowrap">{{ $update1->en_que_ocupa_la_mayor_parte_del_tiempo }}</td>
                                    <td class="text-nowrap">{{ $update1->empresa_en_la_que_labora}}</td>
                                    <td class="text-nowrap">{{ $update1->cargo_que_ocupa}}</td>
                                    <td class="text-nowrap">{{ $active }}</td>
                                    <td class="text-nowrap">

                                    </td>
                                </tr>
                            @endforeach

                        </table>
                        {{ $update->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
