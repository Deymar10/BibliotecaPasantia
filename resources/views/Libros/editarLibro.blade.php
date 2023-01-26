@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>EDITAR LIBRO</strong>
        </div>
    </div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
               
        <form method="POST" action="{{ route('libros.update', $libro)}}">
        @csrf
        @method('PUT')
            
        <div class="mb-3">
                <label for="id_autor" class="form-label">autor</label>
                <select class="form-control" name="id_autor">
                    @foreach ($autor as $item)
                    <option value="{{$item->id }}">{{$item->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $libro->titulo }}" aria-descr>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $libro->categoria }}" aria-descr>
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