@extends('layouts.app')

@section('content')
    <form action="{{url('/data/store')}}" method="post">
        @csrf
        @include('columns.form')


<input type="submit" class="btn btn-success" value="agregar">

    </form>

@endsection
