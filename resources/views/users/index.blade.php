@extends('layouts.app')

@section('title')
    Administrar usuarios
@endsection

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Usuarios
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm table-responsive">
                                <tr>
                                    <th colspan="6">
                                        <a href="#" class="btn btn-success">
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
                                    <th>Acción</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="text-nowrap">{{ $user->name }}</td>
                                        <td class="text-nowrap">{{ $user->last_name }}</td>
                                        <td class="text-nowrap">{{ $user->document_type }}</td>
                                        <td class="text-nowrap">{{ $user->document_number }}</td>
                                        <td class="text-nowrap">{{ $user->email }}</td>
                                        <td class="text-nowrap">
                                            <a href="#" class="btn btn-danger">Inactivar</a>
                                            <a href="#" class="btn btn-warning">Editar</a>
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
