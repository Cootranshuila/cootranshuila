<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">
                    @routeIs('dashboard') Aplicaciones @else Aplicacion:  @endif
                        {{-- @routeIs('prq') PQR  @endif
                        @routeIs('especial') Servicio Especial  @endif
                        @routeIs('sanciones') Operativos y Sanciones  @endif
                        @routeIs('modemygps') Modem y GPS  @endif
                        @routeIs('postulados') Postulados  @endif
                        @routeIs('turismo') Turismo  @endif --}}
                </li>

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

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>