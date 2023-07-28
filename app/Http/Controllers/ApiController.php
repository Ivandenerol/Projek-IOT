<?php

namespace App\Http\Controllers;

use App\Models\Penjumlahan;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $tanggal = $request->input('tgl');

        $events = Penjumlahan::whereDate('tgl', $tanggal)
            ->get();

        if ($events->isEmpty()) {
            return response()->json(['message' => 'Tidak ada acara pada tanggal ini'], 404);
        }

        return response()->json($events, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
