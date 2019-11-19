@extends('layouts.app_auth')

@section('content')
    <div class="container ">
            <form action="{{route('actualizacion.searchgraduate')}}" method="post">
                @csrf
                <div class="header-area">
                    <h2>Ingresa Tu Cedula</h2>
                    <br><br>
                </div>
                <input type="text" name="cedula" id="cedula" >
                <br><br>
                <input type="submit" class="btn btn-success" value="Ingresar">
            </form>
        </form>
    </div>
@endsection
