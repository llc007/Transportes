@extends('adminlte/layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Entregas de hoy</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped datatables_wrapper dataTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Sub orden</th>
                        <th>do</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Sku</th>
                        <th>Direccion</th>
                        <th>Posruta</th>
                        <th>Patente</th>
                        <th>Nombre cliente</th>
                        <th>Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($entregas as $e)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td><a href="{{route('entregaProceso',[$e->id])}}">{{$e->suborden}}</a></td>
                            <td>{{$e->do}}</td>
                            <td>{{$e->producto}}</td>
                            <td>{{$e->cantidad}}</td>
                            <td>{{$e->sku}}</td>
                            <td>{{$e->direccion}}</td>
                            <td>{{$e->posruta}}</td>
                            <td>{{$e->patente}}</td>
                            <td>{{$e->nombreCliente}}</td>
                            <td>Pendiente</td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Sub orden</th>
                        <th>do</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Sku</th>
                        <th>Direccion</th>
                        <th>Posruta</th>
                        <th>Patente</th>
                        <th>Nombre cliente</th>
                        <th>Estado</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>

@endsection

@section('scripts')
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endsection
