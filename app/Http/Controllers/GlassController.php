<?php

namespace App\Http\Controllers;

use App\Models\Damage_reports;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class GlassController extends Controller
{
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tgl = Date('Y-m-d');

        $data = DB::table('damage_reports')
            ->whereDate('date_time', $tgl)
            ->pluck('class_name')
            ->countBy();

        // $data = Post::get()->countBy('class_name');

        return view('glass', ['data' => $data, 'tgl' => $tgl]);

        // $riject = Totalbox::select(DB::raw('DATE(tgl_total) as tanggal, MAX(ttl_box) as nilai'))
        //     ->groupBy('tgl_total')
        //     ->latest('tanggal') 
        //     ->get();

        // return view('riject', ['data' => $riject]);
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
