@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>REGISTRAR LIBRO</strong>
        </div>
    </div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
               
        <form method="POST" action="{{ route('libros.store')}}">
        @csrf
            
            
            <div class="mb-3">
                <label for="nombre" class="form-label">id_autor</label>
                <input type="number" value = 1 class="form-control" id="id_autor" name="id_autor" aria-descr>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" aria-descr>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" aria-descr>
            </div>
                   
            <br>
            
            <button type="submit" class="btn btn-success">REGISTRAR</button>
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