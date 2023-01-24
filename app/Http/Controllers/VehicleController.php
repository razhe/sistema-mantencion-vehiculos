<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vehicle\CreateVehicleRequest;
use App\Http\Requests\Vehicle\UpdateVehicleRequest;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::with('user')->get();
        return view('vehicle.index', compact('vehicles'));
    }

    public function create()
    {
        $users = User::all();
        return view('vehicle.create', compact('users'));
    }

    public function store(CreateVehicleRequest $request)
    {
        Vehicle::create($request->validated());
        return redirect()->route('vehicle.index');

    }

    public function show(Vehicle $vehicle)
    {
        //
    }

    public function edit(Vehicle $vehicle)
    {
        $users = User::all();
        return view('vehicle.edit', compact('vehicle', 'users'));
    }

    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        if ($request->user_id != $vehicle->user_id) {
            $vehicle->historicalUsers()->attach($vehicle->user_id);
        }
        $vehicle->update($request->validated());
        return redirect()->route('vehicle.index');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicle.index');
    }
}
