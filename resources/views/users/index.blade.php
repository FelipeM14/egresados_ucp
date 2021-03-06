@extends('layouts.app')

@section('title')
    Administrar usuarios
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th colspan="7">
                                    <a href="{{ route('users.create') }}" class="btn btn-success">
                                        Nuevo usuario
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Tipo de documento</th>
                                <th>Número de documento</th>
                                <th>Correo electrónico</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                            @foreach($users as $user)
                                @php($user->active ? $active = 'Habilitado' : $active = 'Inhabilitado')
                                <tr>
                                    <td class="text-nowrap">{{ $user->name }}</td>
                                    <td class="text-nowrap">{{ $user->last_name }}</td>
                                    <td class="text-nowrap">{{ $user->document_type }}</td>
                                    <td class="text-nowrap">{{ $user->document_number }}</td>
                                    <td class="text-nowrap">{{ $user->email }}</td>
                                    <td class="text-nowrap">{{ $active }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-warning">Editar</a>
                                        <a href="{{ route('users.roles', ['user' => $user->id]) }}" class="btn btn-primary">Roles</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
