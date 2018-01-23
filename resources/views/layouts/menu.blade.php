@if(!(Auth::guest()))


<div class="">
    <div class=" col-xs-12 col-sm-4 col-md-3">
		<div class="sidebar-nav menucontorno">
  <div class="navbar navbar-default" role="navigation">

  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Menu</span>
    </div>

<br>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
        <li class="active menu">
          <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed menu">
            <h4> Control Panel</h4>
          </a>
         
        </li>



        <li class="menu">
          <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-chevron-right"></span> Accesos <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo1" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a class="menua" href="{{ url('/accesos/create') }}">Crear</a></li>
              <li><a class="menua" href="{{ url('/accesos') }}">Listado</a></li>
              
            </ul>
          </div>
        </li>


        <li class="menu">
          <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-chevron-right"></span> Proyectos <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo2" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a class="menua" href="{{ url('/proyectos/create') }}">Crear</a></li>
              <li><a class="menua" href="{{ url('/proyectos') }}">Listado</a></li>
              
            </ul>
          </div>
        </li>

        
        <li class="menu">
          <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-chevron-right"></span> Tipo Trabajadores <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo3" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a class="menua" href="{{ url('/tipotrabajadors/create') }}">Crear</a></li>
              <li><a class="menua" href="{{ url('/tipotrabajadors') }}">Listado</a></li>
              
            </ul>
          </div>
        </li>


        <li class="menu">
          <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo4" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-chevron-right"></span> Trabajadores <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo4" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a class="menua" href="{{ url('/trabajadors/create') }}">Crear</a></li>
              <li><a class="menua" href="{{ url('/trabajadors') }}">Listado</a></li>
              
            </ul>
          </div>
        </li>


        <li class="menu">
          <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo5" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-chevron-right"></span> Usuarios <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo5" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a class="menua" href="{{ url('/users/create') }}">Crear</a></li>
              <li><a class="menua" href="{{ url('/users') }}">Listado</a></li>
              
            </ul>
          </div>
        </li>



 
        <li class="menu"> 
            <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo6" data-parent="#sidenav01" class="collapsed">
            <span class="glyphicon glyphicon-chevron-right"></span> Comunicaciones <span class="caret pull-right"></span>
            </a>
            <div class="collapse" id="toggleDemo6" style="height: 0px;">
                <ul class="nav nav-list">
                <li><a class="menua" href="{{ url('/comunicacions/create') }}">Crear</a></li>
                <li><a class="menua" href="{{ url('/comunicacions') }}">Listado</a></li>
                
                </ul>
            </div>
        </li>


        <li class="menu"> 
            <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo7" data-parent="#sidenav01" class="collapsed">
            <span class="glyphicon glyphicon-chevron-right"></span> Tareas <span class="caret pull-right"></span>
            </a>
            <div class="collapse" id="toggleDemo7" style="height: 0px;">
                <ul class="nav nav-list">
                <li><a class="menua" href="{{ url('/tareas/create') }}">Crear</a></li>
                <li><a class="menua" href="{{ url('/tareas') }}">Listado</a></li>
                
                </ul>
            </div>
        </li>

        <li class="menu"> 
            <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo8" data-parent="#sidenav01" class="collapsed">
            <span class="glyphicon glyphicon-chevron-right"></span> Documentos-Planos <span class="caret pull-right"></span>
            </a>
            <div class="collapse" id="toggleDemo8" style="height: 0px;">
                <ul class="nav nav-list">
                <li><a class="menua" href="{{ url('/docplanos/create') }}">Crear</a></li>
                <li><a class="menua" href="{{ url('/docplanos') }}">Listado</a></li>
                
                </ul>
            </div>
        </li>

        <li class="menu"> 
            <a href="" onclick="return false;" data-toggle="collapse" data-target="#toggleDemo9" data-parent="#sidenav01" class="collapsed">
            <span class="glyphicon glyphicon-chevron-right"></span> Fotos <span class="caret pull-right"></span>
            </a>
            <div class="collapse" id="toggleDemo9" style="height: 0px;">
                <ul class="nav nav-list">
                <li><a class="menua" href="{{ url('/fotos/create') }}">Crear</a></li>
                <li><a class="menua" href="{{ url('/fotos') }}">Listado</a></li>
                
                </ul>
            </div>
        </li>


        

        <!--<li class="active"><a href=""><span class="glyphicon glyphicon-cog"></span> Administrador</a></li>-->
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>


@endif