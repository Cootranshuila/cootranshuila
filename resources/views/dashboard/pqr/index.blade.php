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
                        <li class="breadcrumb-item active">Panel de Administrador</li>
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
                                    <div class="col-lg-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="icons-md mr-3">
                                                        <i class="uim uim-layer-group"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-1">Correos</h5>
                                                        <p class="text-muted"># Correos sin contestar</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-center">
                                                <a href="{{ route('pqr-correos') }}">Ver Correos</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="icons-md mr-3">
                                                        <i class="uim uim-lock"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-1">Reclamos</h5>
                                                        <p class="text-muted"># Reclamos sin contestar</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-center">
                                                <a href="{{ route('pqr-correos') }}">Ver Reclamos</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="icons-md mr-3">
                                                        <i class="uim uim-briefcase"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-1">Sugerencias</h5>
                                                        <p class="text-muted"># Sugerencias sin contestar</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-center">
                                                <a href="{{ route('pqr-correos') }}">Ver Sugerencias</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="icons-md mr-3">
                                                        <i class="uim uim-document-layout-left"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-1">Quejas</h5>
                                                        <p class="text-muted"># Quejas sin contestar</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-center">
                                                <a href="{{ route('pqr-correos') }}">Ver Quejas</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="icons-md mr-3">
                                                        <i class="uim uim-favorite"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-1">Felicitaciones</h5>
                                                        <p class="text-muted"># Felicitaciones nuevas</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-center">
                                                <a href="{{ route('pqr-correos') }}">Ver Felicitaciones</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border shadow-none">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="icons-md mr-3">
                                                        <i class="uim uim-sync-exclamation"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-1">Contestados</h5>
                                                        <p class="text-muted">Ver todos los procesos contestados</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-center">
                                                <a href="{{ route('pqr-correos') }}">Ver Contestados</a>
                                            </div>
                                        </div>
                                    </div>
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