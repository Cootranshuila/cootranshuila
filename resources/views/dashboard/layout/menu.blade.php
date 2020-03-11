<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menú</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">
                    @routeIs('dashboard') Aplicaciones @else Aplicacion: @endif
                    <i>
                        @if ( Request::is('dashboard/pqr') || Request::is('dashboard/pqr/*') ) PQR @endif
                        @if ( Request::is('dashboard/especial') || Request::is('dashboard/especial/*') ) Servicio Especial @endif
                        @if ( Request::is('dashboard/sanciones') || Request::is('dashboard/sanciones/*') ) Operativos y Sanciones @endif
                        @if ( Request::is('dashboard/modemygps') || Request::is('dashboard/modemygps/*') ) Modem y GPS @endif
                        @if ( Request::is('dashboard/postulados') || Request::is('dashboard/postulados/*') ) Postulados @endif
                        @if ( Request::is('dashboard/turismo') || Request::is('dashboard/turismo/*') ) Turismo @endif
                    </i> 
                </li>

                <!-- MENU del Index del Dashboard -->
                @routeIs('dashboard')

                    @canany(['pqr', 'universal'])
                        <li>
                            <a href="{{ route('pqr') }}" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-2"><i class="fas fa-envelope"></i></div>
                                <span> PQR</span>
                            </a>
                        </li>
                    @endcanany

                    @canany(['servicio-especial', 'universal'])
                        <li>
                            <a href="{{ route('especial') }}" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-2"><i class="fas fa-tachometer-alt"></i></div>
                                <span> Servicio Especial</span>
                            </a>
                        </li>
                    @endcanany

                    @canany(['sanciones', 'universal'])
                        <li>
                            <a href="{{ route('sanciones') }}" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-2"><i class="fas fa-exclamation-triangle"></i></div>
                                <span> Sanciones</span>
                            </a>
                        </li>
                    @endcanany

                    @canany(['modem-gps', 'universal'])
                        <li>
                            <a href="{{ route('modemygps') }}" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-2"><i class="fas fa-wifi"></i></div>
                                <span> Modem y GPS</span>
                            </a>
                        </li>
                    @endcanany

                    @canany(['postulados', 'universal'])
                        <li>
                            <a href="{{ route('postulados') }}" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-3"><i class="fas fa-user-tie"></i></div>
                                <span> Postulados</span>
                            </a>
                        </li>
                    @endcanany

                    @canany(['turismo', 'universal'])
                        <li>
                            <a href="{{ route('turismo') }}" class=" waves-effect">
                                <div class="d-inline-block icons-sm mr-2"><i class="fas fa-plane-departure"></i></div>
                                <span> Turismo</span>
                            </a>
                        </li>
                    @endcanany

                @endif

                <!-- MENU del PQR -->
                @if ( Request::is('dashboard/pqr') || Request::is('dashboard/pqr/*') )
                    <li>
                        <a href="{{ route('pqr-correos') }}" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fa fa-envelope"></i></div>
                            <span> Correo</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pqr-reclamos') }}" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fas fa-exclamation-triangle"></i></div>
                            <span> Reclamos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pqr-sugerencias') }}" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fa fa-briefcase"></i></div>
                            <span> Sugerencias</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pqr-quejas') }}" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fas fa-clipboard-list"></i></div>
                            <span> Quejas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pqr-felicitaciones') }}" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fa fa-laugh-beam"></i></div>
                            <span> Felicitaciones</span>
                        </a>
                    </li>

                    <li class="menu-title">Otros</li>

                    <li>
                        <a href="{{ route('pqr-contestados') }}" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fa fa-envelope-open-text"></i></div>
                            <span> Contestados</span>
                        </a>
                    </li>
                @endif

                    <!--Menú de servicio especial-->

                @if ( Request::is('dashboard/especial') || Request::is('dashboard/especial/*') )
                    <li>
                        <a href="" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fas fa-file-signature"></i></div>
                            <span> Contratos</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fa fa-envelope-open-text"></i></div>
                            <span>Crear nuevo contrato</span>
                        </a>
                    </li>
                @endif

                    <!--Menú de sanciones-->

                @if ( Request::is('dashboard/sanciones') || Request::is('dashboard/sanciones/*') )

                        <li>
                        <a href="" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fas fa-hourglass-half"></i></div>
                            <span> Operativos en proceso</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fas fa-chevron-circle-down"></i></div>
                            <span>Operativos terminados</span>
                        </a>
                    </li>

                    <li>
                        <a href="" class=" waves-effect">
                            <div class="d-inline-block icons-sm mr-2"><i class="fa fa-envelope-open-text"></i></div>
                            <span>Agregar operativos</span>
                        </a>
                    </li>

                @endif

                    <!--Menú de Modem & Gps-->

                @if ( Request::is('dashboard/modemygps') || Request::is('dashboard/modemygps/*') )

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-hourglass-half"></i></div>
                        <span>En proceso</span>
                    </a>
                    </li>
                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-chevron-circle-down"></i></div>
                        <span>Terminados</span>
                    </a>
                    </li>

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fa fa-envelope-open-text"></i></div>
                        <span>Agregar</span>
                    </a>
                    </li>

                @endif

                <!--Menú de Postulados-->

                @if ( Request::is('dashboard/postulados') || Request::is('dashboard/postulados/*') )

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-car"></i></div>
                        <span>Conductores</span>
                    </a>
                    </li>

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-hands-helping"></i></div>
                        <span>Auxiliares de viaje</span>
                    </a>
                    </li>

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="far fa-user"></i></div>
                        <span>Consignatarios taquilleros</span>
                    </a>
                    </li>

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-satellite-dish"></i></div>
                        <span>Consignatarios satélite</span>
                    </a>
                    </li>

                @endif

                <!--Menú de Turismo-->

                @if ( Request::is('dashboard/turismo') || Request::is('dashboard/turismo/*') )

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-user-tie"></i></div>
                        <span>Clientes</span>
                    </a>
                    </li>

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="far fa-file-word"></i></div>
                        <span>Encuestas</span>
                    </a>
                    </li>

                    <li>
                    <a href="" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-sms"></i></div>
                        <span>Enviar SMS</span>
                    </a>
                    </li>
                    
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>