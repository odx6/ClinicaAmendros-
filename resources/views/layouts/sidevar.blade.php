<div class="main-container sidebar-closed sbar-open" id="container">

<div class="overlay"></div>
<div class="search-overlay"></div>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    
    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="{{asset('src/assets/img/clinica.jpeg')}}" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="index.html" class="nav-link"> Clínica  </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>

        <ul class="list-unstyled menu-categories" id="accordionExample">

            
            <li class="menu">
                  @if(auth()->user()->role=="secretaria")
                <a href="{{route('Home')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                        <span>Agenda Secretaria </span>
                    </div>
                </a>
                <a href="{{route('index.Pagos')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                        <span> cobro de consulta </span>
                    </div>
                </a>
                 <a href="{{route('store.Pagos')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                        <span> Pagos de consultas </span>
                    </div>
                </a>
                 @endif
                @if(auth()->user()->role=="medico")
                <a href="{{route('Doctor.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                        <span>Agenda Medico </span>
                    </div>
                </a>
                @endif
                @if(auth()->user()->role=="medico")
                <a href="{{route('store.Consultas')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                        <span>Consultas</span>
                    </div>
                </a>
                @endif
                <a href="{{route('paciente.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                        <span>Agregar Paciente </span>
                    </div>
                </a>
            </li>
           
            
            <li class="menu active">
                
            </li>
             @if(auth()->user()->role=="director")
            <li class="menu">
                        <a href="#clinica" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect></svg>
                                <span>Clínica</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="clinica" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{route('index.Areas')}}">Áreas</a>
                            </li>
                            <li>
                                <a href="{{route('index.Usuarios')}}">Usuarios </a>
                            </li>
                            <li>
                                <a href="{{route('index.Medico')}}">Médicos </a>
                            </li>
                             <li>
                                <a href="{{route('index.Secrearia')}}">Secretarias </a>
                            </li>
                            <li>
                                <a href="{{route('Pacientes.listar')}}">Pacientes </a>
                            </li>
                             <li>
                                <a href="{{route('Home')}}">Citas</a>
                            </li>
                             <li>
                                <a href="{{route('index.ConsultasD')}}">Consultas</a>
                            </li>
                            <li>
                                <a href="{{route('index.PagosD')}}">Pagos</a>
                            </li>
                                                       
                        </ul>
                    </li>

             <li class="menu">
                        <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                                <span>Inventario</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{route('index.Productos')}}"> Productos</a>
                            </li>
                            <li>
                                <a href="{{route('index.Preveedor')}}"> Proveedores </a>
                            </li>
                            <li>
                                <a href="{{route('index.Facctura')}}"> Facturas </a>
                            </li>
                                                       
                        </ul>
                    </li>
                    @endif
        </ul>

        
    </nav>

</div>
<!--  END SIDEBAR  -->