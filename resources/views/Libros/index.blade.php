@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>Biblioteca <h4>Bienvenido A los libros</h4></strong>
            <a href="{{ route('libros.create') }}" class="btn btn-outline-success float-right">
                Nueva libro
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
                        <th scope="col">ID AUTOR</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">OPCIONES</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($libros as $item)
                @if($item->autor)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->autor->nombre}}</td>
                        <td>{{$item->titulo}}</td>
                        <td>{{$item->categoria}}</td>

                        <td>
                            <a href="{{ route('libros.edit', $item) }}"  class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('libros.destroy', $item) }}" method="POST" class="form-eliminar">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    @endif
                @endforeach  
                </tbody>
            </table>
            <div class="container mt-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Open modal
                </button>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Modal body..
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
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
                "lengthMenu": "Mostrar MENU registros por p??gina",
                "zeroRecords": "El registro no existe - disculpe",
                "info": "Mostrando p??gina PAGE de PAGES",
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