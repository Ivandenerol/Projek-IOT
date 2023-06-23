<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use App\Models\Damage_reports;
use App\Models\Input_box;
use App\Models\Totalbox;
use App\Models\Penjumlahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class BoxPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lastDataPerDay = Penjumlahan::selectRaw('DATE(tgl) as date, MAX(id) as max_id')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->pluck('max_id');


        $data = Penjumlahan::whereIn('id', $lastDataPerDay)->get();

        return view('boxp', ['data' => $data]);
    }

    public function hasilAkhir()
    {
        return Datatables::of(Penjumlahan::limit(20))->make(true);
    }

    public function search(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $lastDataPerDay = Penjumlahan::selectRaw('DATE(tgl) as date, MAX(id) as max_id')
            ->where('tgl', '>=', $fromDate)
            ->where('tgl', '<=', $toDate)
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->pluck('max_id');
        $data = Penjumlahan::whereIn('id', $lastDataPerDay)->get();

        return view('boxp', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
