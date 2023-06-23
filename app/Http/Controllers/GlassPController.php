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
    public function index(Request $request)
    {
        $rekapGlass = Damage_reports::all();
        return view('glassp', ['rekapGlass' => $rekapGlass]);
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
