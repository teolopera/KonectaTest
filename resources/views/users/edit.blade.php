@extends('layouts.app')

@section('content')

<div class="container mt-3">

    <form class="form-group" method="POST" action="/users/{{$user->id}}">
        
        @method('PUT')
        @csrf
    
        <div class="form-group">
            <label for="">Usuario</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
    
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" name="email" class="form-control" value="{{$user->email}}">
        </div>
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    
    </form>
</div>

@endsection