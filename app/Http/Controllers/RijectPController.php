<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use Dompdf\Dompdf;
use App\Models\Totalbox;
use Barryvdh\DomPDF\PDF;
use App\Models\Input_box;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Models\Damage_reports;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;
use Yajra\DataTables\Contracts\DataTable;

class RijectPController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {

        $rekapBox = Totalbox::select(DB::raw('DATE(tgl_total) as tanggal, MAX(ttl_box) as total'))
            ->groupBy('tgl_total')
            ->get();

        return view('rijectp', ['rekapBox' => $rekapBox]);
    }

    public function max()
    {
        return Datatables::of(Totalbox::limit(10))->make(true);
    }

    public function search(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $rekapBox = Totalbox::select(DB::raw('DATE(tgl_total) as tanggal, MAX(ttl_box) as total'))
            ->where('tgl_total', '>=', $fromDate)
            ->where('tgl_total', '<=', $toDate)
            ->groupBy('tgl_total')
            ->get();

        return view('rijectp', ['rekapBox' => $rekapBox]);
    }

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
