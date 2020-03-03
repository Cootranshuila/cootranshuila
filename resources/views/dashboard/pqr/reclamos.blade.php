@extends('dashboard.layout.app')

@section('title') PQR @endsection

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
                    {{-- <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                                    <h5 class="header-title mb-4">Reclamos enviados desde la página web</h5>
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
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($reclamos as $reclamo)
                                                    <tr>
                                                        <th scope="row">
                                                            <a href="#">{{ $reclamo->num_correo }}</a>
                                                        </th>
                                                        <td>{{ Str::limit($reclamo->nombre_usu, 15) }}</td>
                                                        <td>{{ $reclamo->telefono_usu }}</td>
                                                        <td>{{ Str::limit($reclamo->correo_usu, 20) }}</td>
                                                        <td>{{ Str::limit($reclamo->mensaje_usu, 60) }}</td>
                                                        <td>{{ $reclamo->fecha_correo }}</td>
                                                        <td class="text-center">
                                                            <a href="">
                                                                <a type="button"  class="btn btn-outline-secondary btn-sm"  data-nombre="{{$reclamo->nombre_usu}}" 
                                                                data-telefono="{{$reclamo->telefono_usu}}" data-correo="{{$reclamo->correo_usu}}" data-mensaje="{{$reclamo->mensaje_usu}}"
                                                                data-fecha="$reclamo->fecha_correo" data-placement="top" title="Ver Reclamo" data-toggle="modal" data-target="#exampleModalLong">
                                                                    <i class="mdi mdi-eye"></i>
                                                                </a>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $reclamo ?? ''->links() }}
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