@extends('layout')

@section('content')
<div class="container-fluid vh-100">
    <div class="form-container mt-4" style="max-width: 600px; margin: auto;">
        <h1 class="h3 mb-2 text-gray-800">Registrar Usuario</h1>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control" type="text" name="name" id="name">
                        @error('name')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="last_names">Apellidos</label>
                        <input class="form-control" type="text" name="last_names" id="last_names">
                        @error('last_names')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input class="form-control" type="text" name="email" id="email">
                        @error('email')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary">Crear Usuario</button>
                </div>
            </div>
        </form>  
    </div>
</div>
@endsection