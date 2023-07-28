<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\Damage_reports;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class GlassPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $startOfWeek = now()->startOfWeek(); // Mengambil tanggal awal minggu ini
        $endOfWeek = now()->endOfWeek(); // Mengambil tanggal akhir minggu ini


        $gp = DB::table('damage_reports')
            ->whereBetween('date_time', [$startOfWeek, $endOfWeek])
            ->pluck('class_name')
            ->countBy();

        // $data = Post::get()->countBy('class_name');

        return view('glassp', ['gp' => $gp, 'tgl' => [$startOfWeek, $endOfWeek]]);
    }

    public function total()
    {
        return Datatables::of(Damage_reports::limit(10))->make(true);
    }

    public function search(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $rekapGlass = Damage_reports::all()
            ->where('date_time', '>=', $fromDate)
            ->where('date_time', '<=', $toDate);

        return view('glassp', ['rekapGlass' => $rekapGlass]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
