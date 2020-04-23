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
      <div id="content" class="p-4 p-md-5 pt-5">
        <div class="row">
                @foreach($users as $user)
        
                    <div class="col-sm">
                        <div class="card text-center mt-5" style="width: 18rem;">
                    
                            <div class="card-body">
                                <h5 class="card-title">Usuario<br/>{{$user->name}}</h5>
                                <h5 class="card-text">E-mail<br/> {{$user->email}}</h5>
                                <a href="/users/{{$user->id}}/edit" class="btn btn-warning"><i class="fa fa-edit text-white"></i></a>

                                <form method="POST" action="/users/{{$user->id}}">
                                    @method('DELETE')
                                    @csrf

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash text-white"></i> Eliminar</button>
                                    </div>
                        
                                </form>
                            </div>
                        </div>
                    </div>
                            
                @endforeach
            </div> 
      </div>
    </div>
    
@endsection