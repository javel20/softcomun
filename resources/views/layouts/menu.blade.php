@if(!(Auth::guest()))


<div class="container">
    <div class="col-sm-4 col-md-3">
		<div class="sidebar-nav menucontorno">
  <div class="navbar navbar-default" role="navigation">

  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Control Panel</span>
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

            <ul class="nav nav-list">
            
                <li>
                    <a class="menua" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed" href="{{ url('/home') }}">
                        <span class="glyphicon glyphicon-chevron-right"></span> General <span class=""></span>
                    </a>
                </li>

            </ul>
        </li>


        <li class="menu"> 

            <ul class="nav nav-list">
            
                <li>
                    <a class="menua" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed" href="{{ url('/home') }}">
                        <span class="glyphicon glyphicon-chevron-right"></span> Integrantes <span class=""></span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu"> 

            <ul class="nav nav-list">
            
                <li>
                    <a class="menua" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed" href="{{ url('/home') }}">
                        <span class="glyphicon glyphicon-chevron-right"></span> Tareas <span class=""></span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu"> 

            <ul class="nav nav-list">
            
                <li>
                    <a class="menua" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed" href="{{ url('/home') }}">
                        <span class="glyphicon glyphicon-chevron-right"></span> Comunicaciones <span class=""></span>
                    </a>
                </li>

            </ul>
        </li>


        <li class="menu"> 

            <ul class="nav nav-list">
            
                <li>
                    <a class="menua" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed" href="{{ url('/home') }}">
                        <span class="glyphicon glyphicon-chevron-right"></span> Fotos <span class=""></span>
                    </a>
                </li>

            </ul>
        </li>

        

        <!--<li class="active"><a href=""><span class="glyphicon glyphicon-cog"></span> Administrador</a></li>-->
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>


@endif