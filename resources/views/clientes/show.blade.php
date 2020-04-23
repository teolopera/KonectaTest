@extends('layouts.app')

@section('content')

    <div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<!-- <div class="img" style="background-image: url(images/logo.jpg);"></div> -->
	  				<h3>{{ Auth::user()->name }}</h3>
	  			</div>
	  	    </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="/clientes"><span class="fa fa-home mr-3"></span> Clientes</a>
                </li>
            </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-md-5 pt-5">
        <div class="card style="width: 18rem;"">
            <div class="card body">
                <div class="text-center">
                    <h5 class="card-title text-danger mt-3">Nombre<br/> <span class="text-dark">{{$cliente->name}}</span></h5>
                    <h5 class="card-title text-danger">Teléfono<br/> <span class="text-dark">{{$cliente->phone}}</span></h5>
                    <h5 class="card-title text-danger">Email<br/> <span class="text-dark">{{$cliente->email}}</span></h5>
                    <h5 class="card-title text-danger">Dirección<br/> <span class="text-dark">{{$cliente->direccion}}</span></h5>
                    <h5 class="card-title text-danger">Descripción<br/> <span class="text-dark">{{$cliente->descdireccion}}</span></h5>
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-primary">Editar</a>
    
                    <div class="mt-3">
                        <form method="POST" action="/clientes/{{$cliente->id}}">
                            @method('DELETE')
                            @csrf
            
                            <button type="submit" class="btn btn-danger mb-4">Eliminar</button>
            
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    

@endsection