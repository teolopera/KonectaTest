@extends('layouts.app')

@section('content')
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<h3>{{ Auth::user()->name }}</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/clientes"><span class="fa fa-home mr-3"></span> Clientes</a>
          </li>
          <li>
              <a href="/users"><span class="fa fa-user mr-3"></span> Usuarios</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        
      </div>
    </div>

    @endsection