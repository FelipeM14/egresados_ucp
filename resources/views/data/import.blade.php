@extends('layouts.app')

@section('title')
    Importar datos
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <input type="hidden" id="graduate_app" value="1">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border ">
                    Importar datos
                </div>
                <div class="card-body">

                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-text">1. Exportar plantilla</h5>
                            <p class="card-text">Exporte una plantilla a excel para que la complete con la información que desea importar a la base de datos.</p>
                            <a href="{{ route('data.export.template') }}" class="btn btn-success btn-sm">Exportar plantilla</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-text">2. Importar datos</h5>
                            <form action="{{ route('graduates.import') }}" method="post" enctype="multipart/form-data">

                                @csrf()

                                <div class="form-group">
                                    <label for="file">Seleccione el archivo de la pantilla con los datos</label>
                                    <input type="file" name="file" id="file" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Importar plantilla</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
