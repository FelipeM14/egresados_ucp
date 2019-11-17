@extends('layouts.app_auth')

@section('content')
    <div class="container">
    <form action="{{url('/actualizacion/'. $graduadodate->codigo)}}" method="post">

        @csrf
        {{method_field('PATCH')}}
        @include('columns.form')


        <input type="submit" class="btn btn-success" value="agregar">

    </form>
    </div>

@endsection
