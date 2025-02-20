<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use App\Models\Obat;
use App\Models\Resep;

class ResepController extends Controller
{
    public function index()
    {
        return response()->json(Resep::with('obat')->get(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string',
            'obat_id' => 'required|exists:obats,id'
        ]);

        $resep = Resep::create([
            'nama_pasien' => $request->nama_pasien,
            'obat_id' => $request->obat_id
        ]);

        return response()->json([
            'message' => 'Resep berhasil ditambahkan',
            'data' => $resep
        ], 201);
    }
}
