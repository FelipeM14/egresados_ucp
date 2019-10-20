@extends('layouts.app')

@section('title')
    Administrar usuarios
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header border mb-3">
                    Datos egresados
                </div>

                    <div class="table-responsive border-top-0">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th colspan="700">
                                    <a href="{{ route('columns.create') }}" class="btn btn-success btn-sm">
                                        Nueva columna
                                    </a>
                                    <button @click="createNewRegistry" type="button" class="btn btn-info btn-sm">
                                        Nuevo registro
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th class="py-5 text-center">#</th>
                                @foreach($columns as $column)
                                    <th class="py-5 text-center" style="background-color: {{ $column->color }}; color: {{ $column->color_text }}">{{ $column->title }}</th>
                                @endforeach
                            </tr>
                            <tr>
                                <td v-if="graduate_id" class="p-0">
                                    <input type="text" size="2" class="form-control border-0 rounded-0 px-1" :value="graduate_id">
                                </td>
                                <td class="p-0" v-for="column in columns">
                                    <input @change="storeColumnGraduate(column.name)" v-model="data[column.name]" type="text" class="form-control border-0 rounded-0 px-1" :style="'background-color: '+column.color+';'+' color: '+column.color_text+';'">
                                </td>
                            </tr>

                        </table>
                    </div>
        </div>
    </div>
@endsection
