<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->nama = $validated['nama'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        return response()->json(['message' => 'User registered successfully'], 201);
    }
}