@extends('layouts.app_auth')

@section('content')
    <div class="container ">
    <form action="{{url('/actualizacion/store')}}" method="post">

        <h2>Ingresa tu Cedula Bebe</h2>
        @csrf
        @include('columns.upgrade')


<input type="submit" class="btn btn-success" value="Actua">

    </form>
    </div>

@endsection
