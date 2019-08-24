@extends('layouts.app')

@section('title')
    Administrar roles
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
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th colspan="6">
                                        <a href="#" class="btn btn-success">
                                            Nuevo rol
                                        </a>
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
                                        <td class="text-nowrap">{{ $role->created_at }}</td>
                                        <td class="text-nowrap">
                                            <a href="#" class="btn btn-danger">Inactivar</a>
                                            <a href="#" class="btn btn-warning">Editar</a>
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
