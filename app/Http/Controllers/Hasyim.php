<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\produk;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\detailpenjualan;
use App\Models\create_544221265_Hasyim;
use Illuminate\Http\Request;

class Hasyim extends Controller
{
    public function index()
    {
        $data = produk::all();
        $data2 = pelanggan::all();
        $data3 = penjualan::all();
        $data4 = detailpenjualan::all();
        $data5 = create_544221265_Hasyim::all();
        return view('Hasyim',compact('data','data2','data3','data4','data5'));
    }
    public function store(Request $request)
    {
        $data = new produk;
        $data->namaproduk = $request->namaproduk;
        $data->harga = $request->harga;
        $data->jumlahproduk = $request->jumlahproduk;
        $data->save();
        return redirect('/Hasyim');
    }
    public function update(Request $request, $id)
    {
        $data = produk::find($id);
        $data->namaproduk = $request->namaproduk;
        $data->harga = $request->harga;
        $data->jumlahproduk = $request->jumlahproduk;
        $data->save();
        return redirect('/Hasyim');
    }
    public function destroy($id)
    {
        $data = produk::find($id);
        $data->delete();
        return redirect('/Hasyim');
    }


}
