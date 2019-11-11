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
            <div class="card-header border mb-3">
                Datos egresados
            </div>

            <table class="table table-bordered table-sm mb-0">
                <tr>
                    <th colspan="700">
                        <div class="input-group">
                            <input @keyup="getGraduates" type="text" id="text_f" class="form-control rounded-0" placeholder="Filtrar...">
                            <select @change="getGraduates" id="col_f" class="custom-select rounded-0">
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
            </table>

            <div class="table-responsive">
                <table class="table table-bordered table-sm mt-0">
                    <tr>
                        <th class="py-4 text-center align-middle">
                            <div class="dropdown">
                                <div class="pointer dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    #
                                </div>
                                <div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuLink">
                                    <a @click='getGraduates(1,"id","ASC")' class="dropdown-item" href="#">
                                        <i class="fas fa-sort-amount-down-alt text-muted mr-3"></i>
                                        Ascendente
                                    </a>
                                    <a @click='getGraduates(1,"id","DESC")' class="dropdown-item" href="#">
                                        <i class="fas fa-sort-amount-up text-muted mr-3"></i>
                                        Descendente
                                    </a>
                                </div>
                            </div>
                        </th>
                        @foreach($columns as $column)
                            <th class="py-4 text-center align-middle" style="background-color: {{ $column->color }}; color: {{ $column->color_text }}; min-width: {{ $column->size.'px' }};">

                                <div class="dropdown">
                                    <div class="pointer dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $column->title }}
                                    </div>
                                    <div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuLink">
                                        <a @click='getGraduates(1,"{{ $column->name }}","ASC")' class="dropdown-item" href="#">
                                            <i class="fas fa-sort-amount-down-alt text-muted mr-3"></i>
                                            Ascendente
                                        </a>
                                        <a @click='getGraduates(1,"{{ $column->name }}","DESC")' class="dropdown-item" href="#">
                                            <i class="fas fa-sort-amount-up text-muted mr-3"></i>
                                            Descendente
                                        </a>
                                    </div>
                                </div>
                            </th>
                        @endforeach
                        <th class="py-4 text-center align-middle">Acción</th>
                    </tr>
                    <tr v-for="graduate in graduates.data">
                        <td>
                            @{{ graduate.id }}
                        </td>
                        <td v-for="column in columns" class="text-nowrap">
                            @{{ graduate[column.name] }}
                        </td>
                        <td>
                            <a :href="'show_graduate/'+graduate.id" class="btn btn-outline-primary btn-sm">Datos</a>
                        </td>
                    </tr>
                </table>

                <input type="hidden" value="1" id="update">
                <pagination :data="graduates" @pagination-change-page="getGraduates"></pagination>
            </div>
        </div>
    </div>

@endsection
