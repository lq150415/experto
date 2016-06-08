@extends ('layout')
@section('cuerpo')
<style type="text/css">
	@media (min-width: 768px) {
  .navbar2-collapse {
    height: auto;
    border-top: 0;
    box-shadow: none;
    max-height: none;
    padding-left:0;
    padding-right:0;
  }
  .navbar2-collapse.collapse {
    display: block !important;
    width: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar2-collapse.in {
    overflow-x: visible;
  }

.navbar2
{
	max-width:300px;
	margin-right: 0;
	margin-left: 0;
}	

.navbar2-nav,
.navbar2-nav > li,
.navbar2-left,
.navbar2-right,
.navbar2-header
{float:none !important;}

.navbar2-right .dropdown-menu {left:0;right:auto;}
.navbar2-collapse .navbar2-nav.navbar2-right:last-child {
    margin-right: 0;
}
}
</style>


	<div class=""  style="padding:0px; margin-top:-1%; margin-left:10%; margin-right:10%; ">
	<div>@yield('cuestionarios')</div>
  <div style="float:left;">
<nav class="navbar2 navbar-default navbar-inverse sidebar"  role="navigation">
    <div class="container-fluid" style="padding:0%;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>   
      	<p class="navbar-brand" href="#">DIAGNOSTICOS</p>   
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1" >
      <ul class="nav navbar-nav" style="width:100%;">       
        <li style="width:80%;" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Antropomedico <span class="caret colorspan"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-shopping-cart colorspan"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            
            <li><a href="#">· Circunferencial</a></li>
            <li><a href="#">· Pegue graso</a></li>
            <li><a href="#">· IMC</a></li>
          </ul>
        </li>
        <li style="width:80%;" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuestionario <span class="caret colorspan"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard colorspan"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{url('cribaje')}}">· Cribaje</a></li>
            <li><a href="#">· Evaluacion alimentaria</a></li>
            <li><a href="{{url('global')}}">· Evaluacion global</a></li>
          </ul>
        </li>                    
      
      </ul>
    </div>
  </div>
</nav>

	</div>
  </div>
@stop