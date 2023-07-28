<?php

namespace App\Http\Controllers;

use App\Models\Damage_reports;
use App\Models\Totalbox;
use App\Models\Kerusakan;
use Illuminate\Support\Js;
use App\Models\Penjumlahan;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BoxController extends Controller
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

        $tgl = date('Y-m-d');
        $t_kerusakan = Damage_reports::where('date_time', $tgl)->count('class_name');

        $isibox = 48;
        $t = Totalbox::where('tgl_total', $tgl)->max('ttl_box');


        // memanggil sisa gelas pada tanggal sebelumnya
        $yesterday = today()->subDay();
        $data = Penjumlahan::whereDate('tgl', $yesterday)->max('sisa_gelas');

        // melakukan penjumlahan total gelas
        $total  = $t * $isibox - $t_kerusakan + $data;
        $return = $total / $isibox;

        // menkonversi return box ke dalam float
        $floatValue = $return;
        $totalreturn = intval($floatValue);

        // menghitung sisa gelas
        $t_gelas = $return * $isibox;
        $sisa_gelas = $t_gelas % $isibox;
        // $perhitungan = $total + $sisa_gelas;


        Penjumlahan::create([
            'tgl'     => $tgl,
            'jumlah_box'       => $totalreturn,
            'sisa_gelas'    => $sisa_gelas
        ]);

        return view('box', compact('tgl', 'totalreturn'));
    }

    public function penjumlahan(Request $request)
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
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
