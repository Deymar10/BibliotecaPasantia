@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>EDITAR AUTOR</strong>
        </div>
    </div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
               
        <form method="POST" action="{{ route('autores.update', $autor)}}">
        @csrf
        @method('PUT')
            
        <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $autor->nombre }}" aria-descr>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $autor->apellido }}" aria-descr>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="{{ $autor->correo }}" aria-descr>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Celular</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $autor->telefono }}" aria-descr>
            </div>
                   
            <br>
            
            <button type="submit" class="btn btn-success">EDITAR</button>
            <button type="submit" class="btn btn-primary">CANCELAR</button>
            
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop