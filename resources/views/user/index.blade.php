@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid vh-100">
    <!-- DataTales Example -->

    <a class="btn btn-primary my-3" href="{{ route('user.create') }}">Añadir Usuario</a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_names }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10%">
                                    <a href="{{ route('user.edit', $user) }}" class="btn btn-warning btn-sm w-100">
                                        <span class="text"> Editar </span>
                                    </a>
                                    <form action="{{ route('user.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm w-100 mt-2" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
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

</div>
<!-- /.container-fluid -->
@endsection