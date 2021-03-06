@extends('dashboard.layout.app')

@section('title') Correo #{{ request('id') }} @endsection

<div id="layout-wrapper">

@extends('dashboard.layout.header')

@extends('dashboard.layout.menu')

@section('content')
<div class="main-content">

    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Dashboard</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Panel del Administrador</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="date text-white text-muted">
                                <span id="weekDay" class="weekDay"></span>, 
                                <span id="day" class="day"></span> de
                                <span id="month" class="month"></span> del
                                <span id="year" class="year"></span>
                            </div>
                            <div class="clock text-white text-muted">
                                <span id="hours" class="hours"></span> :
                                <span id="minutes" class="minutes"></span> :
                                <span id="seconds" class="seconds"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-5">

                                    <h5 class="header-title mb-4">Correo #{{ request('id') }}</h5>

                                    <div class="table-responsive mb-3">
                                        <table class="table table-centered table-hover table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Teléfono</th>
                                                    <th scope="col">Correo</th>
                                                    <th scope="col">Mensaje</th>
                                                    <th scope="col" width="120px">Fecha</th>
                                                    <th scope="col">Respuesta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <th>{{ @$correo['num_correo']}}</th>
                                            <td>{{ Str::limit(@$correo['nombre_usu'], 20) }}</td>
                                            <td>{{ @$correo['telefono_usu'] }}</td>
                                            <td>{{ Str::limit(@$correo['correo_usu'], 20) }}</td>
                                            <td>{{ Str::limit(@$correo['mensaje_usu'], 10000) }}</td>
                                            <td>{{ @$correo['fecha_correo'] }}</td>
                                            <td>{{ @$correo['respuesta']}}</td>
                                            </tbody>
                                        </table>
                                    </div>
                                <!--{{ $correo }}-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-sm-right d-none d-sm-block">
                        2020 © Cootranshila.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

</div>