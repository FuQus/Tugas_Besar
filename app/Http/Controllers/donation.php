<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        return response()->json(Donation::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'donor_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'donor_email' => 'nullable|email',
            'item_image_path' => 'nullable|image',
        ]);

        $donation = Donation::create($validated);

        return response()->json(['message' => 'Donation created successfully', 'data' => $donation]);
    }

    public function update(Request $request, Donation $donation)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:pending,approved,rejected',
        ]);

        $donation->update($validated);

        return response()->json(['message' => 'Donation updated successfully', 'data' => $donation]);
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();

        return response()->json(['message' => 'Donation deleted successfully']);
    }
}
