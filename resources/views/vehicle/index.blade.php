@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid vh-100">

    <a class="btn btn-primary my-3" href="{{ route('vehicle.create') }}">Añadir Vehículo</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vehículos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Dueño</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Dueño</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->brand }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->year }}</td>
                                <td width="15%"><a href="#" id="view-historicals" data-vahicle="{{ $vehicle->id }}" data-toggle="modal" data-target="#historicals_modal">{{ $vehicle->user->name.' '.$vehicle->user->last_names}}</a></td>                                    
                                <td>{{ $vehicle->price }}</td>
                                <td width="10%">
                                    <a href="{{ route('vehicle.edit', $vehicle) }}" class="btn btn-warning btn-sm w-100">
                                        <span class="text"> Editar </span>
                                    </a>
                                    <form action="{{ route('vehicle.destroy', $vehicle) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm w-100 mt-2" onclick="return confirm('¿Estás seguro de eliminar este vehículo?')">
                                            <span class="text"> Borrar </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="historicals_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Historicos del Vehículo</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">Esta tabla muestra antiguos dueños del vehículo.</p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody id="historical-table-body">
                                
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('js')
    <script src="{{ asset('static/js/vehicle.js') }}"></script>
@endsection
            