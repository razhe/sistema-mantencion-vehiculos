@extends('layout')

@section('content')
<div class="container-fluid vh-100">
    <div class="form-container mt-4" style="max-width: 600px; margin: auto;">
        <h1 class="h3 mb-2 text-gray-800">Registrar Vehículo</h1>
        <form action="{{ route('vehicle.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="brand">Marca</label>
                        <input class="form-control" type="text" name="brand" id="brand">
                        @error('brand')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="model">Modelo</label>
                        <input class="form-control" type="text" name="model" id="model">
                        @error('model')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="year">Año</label>
                        <input class="form-control" type="number" name="year" id="year">
                        @error('year')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input class="form-control" type="text" name="price" id="price">
                        @error('price')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="user">Dueño</label>
                        <select class="form-control form-select" name="user_id" id="user">
                            @forelse ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name.' '.$user->last_names }}</option>
                            @empty
                                <option disabled selected>Sin usuarios registrados</option>
                            @endforelse
                        </select>
                        @error('user_id')
                            <small class="mt-2"><b style="color:darkred">{{ $message }}</b></small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary">Registrar Vehículo</button>
                </div>
            </div>
        </form>  
    </div>
</div>
@endsection