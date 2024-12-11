<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;

class DistributionController extends Controller
{
    public function index()
    {
        return response()->json(Distribution::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'recipient_name' => 'required|string|max:255',
            'recipient_contact' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:1',
            'details' => 'required|string',
            'item_image_path' => 'nullable|image',
        ]);

        $distribution = Distribution::create($validated);

        return response()->json(['message' => 'Distribution created successfully', 'data' => $distribution]);
    }

    public function destroy(Distribution $distribution)
    {
        $distribution->delete();

        return response()->json(['message' => 'Distribution deleted successfully']);
    }
}