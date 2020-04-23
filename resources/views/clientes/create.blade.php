<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS Sidebar -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    <title>Clientes | Crear</title>
</head>
<body>

    <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<!-- <div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div> -->
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
                <div class="container mt-3">
                    <form class="form-group" method="POST" action="/clientes">
                    
                        @include('clientes.form')
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    
                    </form>
                </div>
            </div>
            </div>
        
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

    
   
    
    