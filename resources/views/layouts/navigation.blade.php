<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="https://belatrizcolombia.com/phpmailerlibrary/VECCIT/public/img/VECCIt-logoprincipal.png" width="40%"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{auth()->user()->name}} <br> {{auth()->user()->lastname}}</strong>
                            </span> <span class="text-muted text-xs block">Opciones <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Ajustes</a></li>
                        <li><a href="#">Desconectar</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    VE+
                </div>
            </li>
            <li class="#">
                <a href="{{ url('/home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Panel principal</span></a>
            </li>
         


            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label"> Gestión de servicios</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="graph_flot.html">Cámara y comercio</a></li>
                    <li><a href="graph_morris.html">Rut</a></li>
                    <li><a href="graph_rickshaw.html">Facturación</a></li>
                    <li><a href="graph_chartjs.html">Contratos</a></li>
                    <li><a href="graph_chartist.html">Estados 
                        financieros</a></li>
                    <li><a href="c3.html">Obligaciones 
                        tributarias</a></li>
                    <li><a href="graph_peity.html"> Informes</a></li>
                    <li><a href="graph_sparkline.html">Otros 
                        tramites</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Servicios</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Cámara y comercio</a></li>
                    <li><a href="graph_flot.html">Rut</a></li>
                   
                    
                </ul>
            </li>
         
            <li>
                <a href="metrics.html"><i class="fa fa-user-o"></i> <span class="nav-label">Usuarios</span>  </a>
            </li>

            <li>
                <a href="metrics.html"><i class="fa fa-cube"></i> <span class="nav-label">Tablas Maestras</span>  </a>
            </li>
     
          

            <li>
                <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Asistencia técnica IT</span></a>
            </li>
           
           
           
         






        </ul>

    </div>
</nav>
