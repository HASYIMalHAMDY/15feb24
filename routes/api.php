<?php

use Illuminate\Http\Request;
use App\Models\create_544221265_Hasyim;
use App\Models\produk;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\detailpenjualan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produk', function () {
    return produk::all();
});

Route::get('/pelanggan', function () {
    return pelanggan::all();
});

Route::get('/penjualan', function () {
    return penjualan::all();
});

Route::get('/detailpenjualan', function () {
    return detailpenjualan::all();
});

Route::get('/create_544221265_Hasyim', function () {
    return create_544221265_Hasyim::all();
});

Route::post('/create_544221265_Hasyim', function (Request $request) {
    $data = new create_544221265_Hasyim;
    $data->namaproduk = $request->namaproduk;
    $data->harga = $request->harga;
    $data->jumlahproduk = $request->jumlahproduk;
    $data->save();
    return redirect('/create_544221265_Hasyim');
});

Route::put('/create_544221265_Hasyim/{id}', function (Request $request, $id) {
    $data = create_544221265_Hasyim::find($id);
    $data->namaproduk = $request->namaproduk;
    $data->harga = $request->harga;
    $data->jumlahproduk = $request->jumlahproduk;
    $data->save();
    return redirect('/create_544221265_Hasyim');
});

Route::delete('/create_544221265_Hasyim/{id}', function ($id) {
    $data = create_544221265_Hasyim::find($id);
    $data->delete();
    return redirect('/create_544221265_Hasyim');
});




