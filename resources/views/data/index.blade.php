@extends('layouts.app')

@section('title')
    Administrar usuarios
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <input type="hidden" id="graduate_app" value="1">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header border mb-3">
                Datos egresados
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <tr>
                        <th colspan="700">
                            <div class="input-group">
                                <button onclick="window.location.href='columns_create'" class="btn btn-outline-secondary btn-sm rounded-left rounded-0 border-right-0">
                                    Nueva columna
                                </button>
                                <button @click="createNewRegistry" class="btn btn-outline-secondary rounded-0 btn-sm">
                                    Nuevo registro
                                </button>
                                <input @keyup="getGraduates" type="text" id="text_f" class="form-control border-left-0" placeholder="Filtrar...">
                                <select @change="getGraduates" id="col_f" class="custom-select rounded-0">
                                    <!-- <option value="" selected>Todas</option> -->
                                    @foreach($columns as $column)
                                        <option value="{{ $column->name }}">{{ $column->title }}</option>
                                    @endforeach
                                </select>
                                <select v-model="num_f" @change="getGraduates" class="custom-select rounded-0 col-sm-2">
                                    <option value="10">10 Filas</option>
                                    <option value="20">20 Filas</option>
                                    <option value="50">50 Filas</option>
                                    <option value="100">100 Filas</option>
                                    <option value="200">200 Filas</option>
                                    <option value="500">500 Filas</option>
                                    <option value="1000">1000 Filas</option>
                                </select>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th class="py-5 text-center bg-danger text-white">#</th>
                        @foreach($columns as $column)
                            <th class="py-5 text-center" style="background-color: {{ $column->color }}; color: {{ $column->color_text }}">{{ $column->title }}</th>
                        @endforeach
                    </tr>
                    <tr v-for="graduate in graduates.data">
                        <td>
                            <button @click="deleteQuestion(graduate.id)" id="izq" class="btn btn-sm btn-circle btn-danger" data-toggle="tooltip" data-placement="top" title="Compartir">@{{ graduate.id }}</button>
                        </td>
                        <td v-for="column in columns" class="p-0">
                            <input @change="storeColumnGraduate(column.name, graduate.id)"  v-model="graduate[column.name]" type="text" class="form-control border-0 rounded-0 px-1">
                        </td>
                    </tr>
                </table>

                <pagination :data="graduates" @pagination-change-page="getGraduates"></pagination>
            </div>
        </div>
    </div>

    <!--MODAL PARA CONFIRMAR ELIMINAR UN REGISTRO-->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>
                        Confirmar
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    ¿Desea eliminar el registro Nº <span id="delete_r"></span>?<br>
                    <small>Esta acción no se puede revertir</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button @click="deleteRegister" type="button" class="btn btn-danger">Si</button>
                </div>
            </div>
        </div>
    </div>

@endsection
