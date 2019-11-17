@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                     Bienvenid@
                </div>

                <div class="card-body">
                    <div class="row text-center">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body bg-gradient-success border-0">
                                    <div class="row">
                                        <div class="col-4 text-white display-4">
                                            <i class="fas fa-user-graduate"></i>
                                        </div>
                                        <div class="col-8">
                                            <div class="text-left dib">
                                                <div class="stat-text text-white pt-2">
                                                    <strong><span class="count">{{ $graduates }}</span></strong>
                                                </div>
                                                <div class="stat-heading text-white">Graduados</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body bg-gradient-primary border-0">
                                    <div class="row">
                                        <div class="col-4 text-white display-4">
                                            <i class="fas fa-university"></i>
                                        </div>
                                        <div class="col-8">
                                            <div class="text-left dib">
                                                <div class="stat-text text-white pt-2">
                                                    <strong><span class="count">{{ $programs }}</span></strong>
                                                </div>
                                                <div class="stat-heading text-white">Programas</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <br>
                            <br>
                            <br>
                            <br>
                            <h1>Portal Graduados</h1>
                            <h1>Universidad Católica De Pereira</h1>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
