@extends('layouts.app')

@section('title')
    Reporte de datos
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <input type="hidden" id="graduate_app" value="1">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header border ">
                    Reporte de datos
                </div>
                <div class="card-body pb-0">

                    <form action="{{ route('graduates.export') }}" method="post">
                        @csrf
                        <p class="card-text">Exporte la información de todos los graduados de la base de datos en un archivo de Excel.</p>

                        <div class="form-group">
                            <label for="program">1. Seleccione el(los) programa(s)</label>
                            <select name="program" class="form-control" id="">
                                <option value="">Todos los programas</option>
                                @foreach($programs as $program)
                                    <option value="{{ $program->programa }}">{{ $program->programa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year">2. Seleccione el(los) años(s) de graduación</label>
                            <select name="year" class="form-control" id="">
                                <option value="">Todos los años</option>
                                @foreach($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">

                            <label for="program">3. Seleccione la(s) categoría(s)</label>
                            <table class="table table-sm table-bordered">
                                <tr>
                                    <th class="bg-success text-white">
                                        <input type="checkbox" class="cb-selector" data-for="category_id\[">
                                    </th>
                                    <th class="bg-success text-white">
                                        Seleccionar todas
                                    </th>
                                </tr>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="category_id[]" value="{{ $category->id }}">
                                        </td>
                                        <td>
                                            {{ $category->name }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">Generar reporte</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
