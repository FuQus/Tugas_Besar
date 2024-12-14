<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    // Menampilkan daftar donasi dalam tampilan
    public function index()
    {
        // Mengambil semua donasi
        $donations = Donation::all();
        
        // Mengembalikan tampilan dengan data donasi
        return view('donations.index', compact('donations'));
    }

    // Mengembalikan semua donasi dalam format JSON (API)
    public function apiIndex()
    {
        return response()->json(Donation::all());
    }

    // Menyimpan donasi baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'donor_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'donor_email' => 'nullable|email',
            'item_image_path' => 'nullable|image',
        ]);

        // Membuat donasi baru
        $donation = Donation::create($validated);

        return response()->json(['message' => 'Donation created successfully', 'data' => $donation]);
    }

    // Memperbarui donasi
    public function update(Request $request, Donation $donation)
    {
        // Validasi input
        $validated = $request->validate([
            'status' => 'required|string|in:pending,approved,rejected',
        ]);

        // Memperbarui donasi
        $donation->update($validated);

        return response()->json(['message' => 'Donation updated successfully', 'data' => $donation]);
    }

    // Menghapus donasi
    public function destroy(Donation $donation)
    {
        // Menghapus donasi
        $donation->delete();

        return response()->json(['message' => 'Donation deleted successfully']);
    }
}
