@extends('layouts.app')

@section('content')

<div class="container mt-3">

    <form class="form-group" method="POST" action="/clientes/{{$cliente->id}}">
        
        @method('PUT')
        @csrf
    
        <div class="form-group">
            <label for="">Nombre Completo</label>
            <input type="text" name="name" class="form-control" value="{{$cliente->name}}" placeholder="Ingresa el nombre Completo">
        </div>
    
        <div class="form-group">
            <label for="">Telefono</label>
            <input type="text" name="phone" class="form-control" value="{{$cliente->phone}}" placeholder="Ingrese el Telefono">
        </div>
    
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" value="{{$cliente->email}}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="">Barrio</label>
            <input type="text" name="barrio" class="form-control" value="{{$cliente->barrio}}" placeholder="Ingresa el Barrio">
        </div>
    
        <div class="form-group">
            <label for="">Direccion</label>
            <input type="text" name="direccion" class="form-control" value="{{$cliente->direccion}}" placeholder="Ingresa la Dirección">
        </div>
    
        <div class="form-group">
            <label for="">Descripcion de la Direccion</label>
            <input type="text" name="descdireccion" class="form-control" value="{{$cliente->descdireccion}}" placeholder="Ingresa una Descripción de la Direccion">
        </div>
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    
    </form>
</div>

@endsection