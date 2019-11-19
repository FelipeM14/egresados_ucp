@extends('layouts.app_auth')

@section('content')
    <div class="text-center mt-3">

        <div class="card bg-dark text-white">
            <img class="card-img" src="{{ asset('img/bg-img/amo.png') }}" alt="Card image">
            <div class="card p-0 border-0 card-img-overlay col-sm-4 offset-sm-4 bg-white text-success mt-5 mb-5">
                <div class="card-header bg-success text-white text-center">
                    <h5 class="card-title">Bienvenido a la Universidad Católica de Pereira</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Por favor ingrese su número de identificación</p>
                    <br>
                    <form action="{{route('actualization.search.graduate')}}" method="post">
                        @csrf
                        <br>
                        <div class="form-group">
                            <label for="cedula">Número de identificación</label>
                            <input class="form-control text-center" type="text" name="cedula" id="cedula" placeholder="Número de indentificación...">

                        </div>
                        <input type="submit" class="btn btn-success" value="Ingresar">
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
