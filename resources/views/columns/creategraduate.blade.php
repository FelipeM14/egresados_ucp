@extends('layouts.app_auth')

@section('content')
    <div class="container ">
    <form action="{{url('/actualizacion/store')}}" method="post">
        @csrf
        @include('columns.form')


<input type="submit" class="btn btn-success" value="agregar">

    </form>
    </div>

@endsection
