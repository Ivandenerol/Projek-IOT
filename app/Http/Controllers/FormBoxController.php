<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Totalbox;
use App\Models\Input_box;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class FormBoxController extends Controller
{

    public function index()
    {
        return view('formbox');
    }

    public function store(Request $request)
    {

        $messages = [
            'tanggal.required' => 'Tanggal harus diisi.',
            'jumlah_box.required' => 'Jumlah box harus diisi.',
            'numeric' => ': Harus berupa angka',
        ];

        $request->validate([
            'tanggal' => 'required',
            'jumlah_box' => 'required|numeric',
        ], $messages);


        Input_box::create([
            'tanggal' => $request->input('tanggal'),
            'jumlah_box'  => $request->input('jumlah_box')
        ]);

        $date  = date('Y-m-d');
        $dtBox = Input_box::where('tanggal', $date)->sum('jumlah_box');

        Totalbox::create([
            'ttl_box'     => $dtBox,
            'tgl_total'       => $date
        ]);

        return redirect('riject');
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
    public function update($date)
    {
        // $data = Totalbox::find($date);
        // Totalbox::whereDate('tgl_total', $date)->update(['ttl_total' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
