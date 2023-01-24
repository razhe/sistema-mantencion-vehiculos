<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(CreateUserRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    { 
        $user->delete();
        return redirect()->route('user.index');
    }
}
