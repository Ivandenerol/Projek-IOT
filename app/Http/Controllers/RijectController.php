<?php

namespace App\Http\Controllers;

use App\Http\Resources\RijecrResource;
use App\Models\Box;
use App\Models\Input_box;
use App\Models\Totalbox;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Routing\Route;
use Termwind\Components\Dt;

class RijectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date  = date('Y-m-d');
        $riject = Totalbox::where('tgl_total', $date)->max('ttl_box');
        return view('riject', compact('riject', 'date'));

        // $riject = Totalbox::select(DB::raw('DATE(tgl_total) as tanggal, MAX(ttl_box) as nilai'))
        //     ->groupBy('tgl_total')
        //     ->latest('tanggal') // Mengurutkan berdasarkan tanggal terbaru
        //     ->get();

        // return view('riject', ['data' => $riject]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $total = $reming->total;
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
