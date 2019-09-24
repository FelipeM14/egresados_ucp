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
                    Roles | {{ strtoupper($user->name) }}
                </div>

                <div class="card-body">
                    <form action="{{ route('users.addRole', ['user' => $user->id]) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col form-group col-md-6">
                                <div class="input-group">
                                    <select class="custom-select" id="new_role" name="new_role" aria-label="Example select with button addon">
                                        <option value="">Seleccionar</option>
                                        @foreach($not_roles as $r)
                                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit">Agregar rol</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                @if(count($roles))
                                    <tr>
                                        <th>Rol</th>
                                        <th>Acción</th>
                                    </tr>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td class="text-nowrap">{{ $role->name }}</td>
                                            <td class="text-nowrap">
                                                <a href="{{ route('users.removeRole', ['user' => $user->id, 'role' => $role->id]) }}" class="btn btn-warning">Eiliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <th class="text-danger" colspan="2">Actualmente el usuario no tiene roles asignados</th>
                                    </tr>
                                @endif


                            </table>
                            {{ $roles->links() }}
                        </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Aceptar / Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
