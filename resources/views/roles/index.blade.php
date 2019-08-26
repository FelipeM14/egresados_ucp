@extends('layouts.app')

@section('title')
    Administrar roles
@endsection

@section('content')
    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Roles
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th colspan="6">
                                    <a href="{{ route('roles.create') }}" class="btn btn-success">
                                        Nuevo rol
                                    </a>
                                    <label class="text-primary float-right"> Mostrando {{ $roles->count() }} de {{ $roles->total() }} </label>
                                </th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha de creación</th>
                                <th>Acción</th>
                            </tr>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="text-nowrap">{{ $role->name }}</td>
                                    <td class="text-nowrap">{{ $role->created_at->format('d/m/Y') }}</td>
                                    <td class="text-nowrap text-right">
                                        <a href="{{ route('roles.delete', ['role' => $role->id]) }}" class="btn btn-danger">Eliminar</a>
                                        <a href="{{ route('roles.edit', ['role' => $role->id]) }}" class="btn btn-warning">Editar</a>
                                        <a href="{{ route('roles.setting', ['role' => $role->id]) }}" class="btn btn-primary">Configurar permisos</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
