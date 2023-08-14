<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'asal' => 'required',
            'tujuan' => 'required',
            'kode' => 'required',
            'waktu_tujuan' => 'required',
            'checkpoints' => 'required|array'
        ]);
        $rute = Rute::create([
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'kode' => $request->kode,
            'waktu_tempuh' => $request->waktu_tempuh,
            'checkpoints' => json_encode($request->checkpoints)
        ]);

        return response()->json($rute);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function show(Rute $rute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function edit(Rute $rute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rute $rute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rute $rute)
    {
        //
    }
}