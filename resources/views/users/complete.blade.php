@extends('layouts.app_auth')

@section('title')
    Ingresar
@endsection

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-header text-center bg-success text-white">
                    <h4 class="mt-3">Completar registro</h4>

                </div>

                @if($user)
                    <div class="card-body">
                        <br>
                        <form method="POST" action="{{ route('user.update.pass', ['user' => $user->id]) }}">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="row">
                                <div class="form-group col">
                                    <label for="email">Correo eletrónico</label>
                                    <input readonly id="email" placeholder="Correo Electrónico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label for="password-confirm">Verificar contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary">
                                        COMPLETAR
                                    </button><br>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="card-body text-center py-5">
                        <h6 class="text-success">
                            El usuario no se encuentra en la base de datos o ya completó su registro
                        </h6>
                        <a href="{{ route('password.request') }}" class="">Olvidó su contraseña</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
