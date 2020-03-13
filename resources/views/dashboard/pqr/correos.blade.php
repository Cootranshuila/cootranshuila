@extends('dashboard.layout.app')

@extends('dashboard.layout.modal')

@section('title') Correos @endsection

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
                            <div class="date text-white">
                                <span id="weekDay" class="weekDay"></span>, 
                                <span id="day" class="day"></span> de
                                <span id="month" class="month"></span> del
                                <span id="year" class="year"></span>
                            </div>
                            <div class="clock text-white text-right">
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
                            <div class="col-12 center mt-2">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" onkeydown="onKey();" id="texto" placeholder="Ingrese nombre">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Buscar datos</span>
                                                        </div>
                                                </div> 
                                            </div>
                                <div class="row p-5 d-flex justify-content-center" id="tabla-correos">    
                                        <div class="spinner-grow text-dark" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-dark" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-dark" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div> 
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
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