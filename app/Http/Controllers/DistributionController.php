<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution; // Pastikan model Distribution diimpor

class DistributionController extends Controller
{
    public function index()
    {
        // Mengambil semua data distribusi dari database
        $distributions = Distribution::all(); // Ganti dengan query yang sesuai jika perlu

        // Mengembalikan view dengan data distribusi
        return view('distributions.index', compact('distributions'));
    }

    public function create()
    {
        // Mengembalikan view untuk menambah distribusi
        return view('distributions.create'); // Pastikan view ini ada
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data distribusi
        // Misalnya, validasi dan simpan ke database

        // Contoh validasi
        $request->validate([
            'recipient_name' => 'required|string|max:255',
            'recipient_contact' => 'nullable|string|max:255',
            'amount' => 'required|numeric',
            'details' => 'required|string',
            'item_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan data distribusi
        $distribution = new Distribution();
        $distribution->recipient_name = $request->recipient_name;
        $distribution->amount = $request->amount;
        $distribution->details = $request->details;

        // Menyimpan gambar jika ada
        if ($request->hasFile('item_image')) {
            $imagePath = $request->file('item_image')->store('images', 'public');
            $distribution->item_image = $imagePath;
        }

        $distribution->save();

        return redirect()->route('distributions.index')->with('success', 'Distribusi berhasil ditambahkan!');
    }
}