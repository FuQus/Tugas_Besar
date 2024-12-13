<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use Illuminate\Http\Request;

class ProgrammerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'Tanggal_lahir' => 'required|string',
            'deskripsi' => 'required|string',
            'item_image_path' => 'nullable|image',
        ]);

        Programmer::create($validated);
        return response()->json(['message' => 'Programmer data added successfully'], 201);
    }

    public function index()
    {
        return Programmer::all();
    }
}