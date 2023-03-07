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
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
           
            <li >
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Historia | Marcas Tem. </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#" id="damian">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="#">Second Level Item</a></li>
                    <li>
                        <a href="#">Second Level Item</a></li>
                    <li>
                        <a href="#">Second Level Item</a></li>
                </ul>
            </li>


            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Servicio</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="graph_flot.html">Flot Charts</a></li>
                    <li><a href="graph_morris.html">Morris.js Charts</a></li>
                    <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                    <li><a href="graph_chartjs.html">Chart.js</a></li>
                    <li><a href="graph_chartist.html">Chartist</a></li>
                    <li><a href="c3.html">c3 charts</a></li>
                    <li><a href="graph_peity.html">Peity Charts</a></li>
                    <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Economia</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Administración</a></li>
                    <li><a href="graph_flot.html">Ahorros</a></li>
                    <li><a href="graph_flot.html">Trabajos</a></li>
                    <li><a href="graph_flot.html">Objetivos</a></li>
                    
                </ul>
            </li>
         
            <li>
                <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Eventos</span>  </a>
            </li>
     
          
         
       
      
            <li>
                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Investigación</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Armamento Bélico</a></li>
                    <li><a href="#">Armamento Bélico2</a></li>
                    <li><a href="icons.html">Geopolítica</a></li>
                    <li><a href="draggable_panels.html">Tecnología informática</a></li> <li><a href="resizeable_panels.html">Resizeable Panels</a></li>
              
                </ul>
            </li>

            <li>
                <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Proyectos TI</span></a>
            </li>
           
           
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Lugares | Sitios</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                    <li><a href="slick_carousel.html">Slick Carousel</a></li>
                    <li><a href="carousel.html">Bootstrap Carousel</a></li>

                </ul>
            </li>
         






        </ul>

    </div>
</nav>
