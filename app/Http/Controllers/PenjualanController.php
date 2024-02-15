<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = penjualan::all();
        return view('penjualan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create a new resource
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new penjualan;
        $data->tanggal = $request->tanggal;
        $data->total = $request->total;
        $data->save();
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(penjualan $penjualan)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penjualan $penjualan)
    {
        //
    }
}
