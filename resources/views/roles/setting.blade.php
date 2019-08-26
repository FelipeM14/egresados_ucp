@extends('layouts.app')

@section('title')
    Administrar roles
@endsection

@section('content')

    @include('messages._messages')
    @include('messages._errors')

    <div class="row justify-content-center" xmlns:v-on="http://www.w3.org/1999/xhtml">

        <input type="hidden" id="role_app" value="1">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Configurar permisos
                </div>

                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Nombre rol</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" placeholder="Nombre rol">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td colspan="3" class="text-uppercase text-muted">Permisos disponibles</td>
                                    </tr>
                                    <tr>
                                        <td class="text-uppercase text-muted">Nombre</td>
                                        <td class="text-uppercase text-muted">Descripción</td>
                                        <td class="text-uppercase text-muted">Acción</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="permission in permissions">
                                        <td>@{{ permission.name }}</td>
                                        <td>@{{ permission.description }}</td>
                                        <th><button v-on:click.prevent="addPermission(permission.id)" class="btn btn-sm btn-outline-success">Agregar --></button></th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td colspan="3" class="text-uppercase text-muted">Permisos Asignados</td>
                                    </tr>
                                    <tr>
                                        <td class="text-uppercase text-muted">Acción</td>
                                        <td class="text-uppercase text-muted">Nombre</td>
                                        <td class="text-uppercase text-muted">Descripción</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="role_permission in role_permissions">
                                        <td><button v-on:click.prevent="deletePermission(role_permission.permission_role_id)" class="btn btn-sm btn-outline-warning"> <-- Quitar</button></td>
                                        <td>@{{ role_permission.name }}</td>
                                        <td>@{{ role_permission.description }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <input type="hidden" id="role_v" name="role_v" value="{{ $role->id }}">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
