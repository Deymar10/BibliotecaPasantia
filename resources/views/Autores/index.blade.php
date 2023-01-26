@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>Biblioteca <h4>Bienvenido a la Biblioteca</h4></strong>
            <a href="{{ route('autores.create') }}" class="btn btn-outline-success float-right">
                Nuevo autor
            </a>
        </div>
    </div>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            <table class="table table-striped" id="deriva">
                <thead>
                    <tr>
                        <th scope="col">NRO</th>
                        <th scope="col">NOMBRE </th>
                        <th scope="col">APELLIDO </th>
                        <th scope="col">CORREO </th>
                        <th scope="col">TELEFONO </th>
                        <th scope="col">OPCIONES </th>

                    </tr>
                </thead>
                <tbody>
                @foreach($autores as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->apellido}}</td>
                        <td>{{$item->correo}}</td>
                        <td>{{$item->telefono}}</td>

                        <td>
                            <a href="{{ route('autores.edit',$item) }}"  class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('autores.destroy', $item) }}" method="POST" class="form-eliminar">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    {{--Datatable css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
@stop

@section('js')
    <script>
        function externoId( ){
            var id = document.getElementById('nro')
            console.log(id);
        }
    </script>
    <script> console.log('Hi!'); </script>
    {{--Datatables--}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
            $('#deriva').DataTable({
            responsive: true,
            autowidth: false,
            "language": {
                "lengthMenu": "Mostrar MENU registros por página",
                "zeroRecords": "El registro no existe - disculpe",
                "info": "Mostrando página PAGE de PAGES",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de MAX registros totales)",
                "search": "Buscar:",
                "paginate":{
                    "next":"Siguiente",
                    "previous":"Anterior"
                }
            }
        });
    </script>
@stop