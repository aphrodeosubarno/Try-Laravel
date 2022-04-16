<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function new()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function create(Request $request)
    {
        $validated_data = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'unique:users', 'min:8', 'max:255'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        $validated_data['password'] = Hash::make($validated_data['password']);

        User::create($validated_data);

        $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login', 201);
    }
}
