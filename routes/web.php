<?php
use App\Models\create_544221265_Hasyim;
use App\Models\produk;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\detailpenjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
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

Route::post('/produk', function (Request $request) {
    $data = new produk;
    $data->namaproduk = $request->namaproduk;
    $data->harga = $request->harga;
    $data->jumlahproduk = $request->jumlahproduk;
    $data->save();
    return redirect('/produk');
});


Route::put('/produk/{id}', function (Request $request, $id) {
    $data = produk::find($id);
    $data->namaproduk = $request->namaproduk;
    $data->harga = $request->harga;
    $data->jumlahproduk = $request->jumlahproduk;
    $data->save();
    return redirect('/produk');
});

Route::delete('/produk/{id}', function ($id) {
    $data = produk::find($id);
    $data->delete();
    return redirect('/produk');
});

Route::post('/pelanggan', function (Request $request) {
    $data = new pelanggan;
    $data->nama = $request->nama;
    $data->alamat = $request->alamat;
    $data->save();
    return redirect('/pelanggan');
});

Route::put('/pelanggan/{id}', function (Request $request, $id) {
    $data = pelanggan::find($id);
    $data->nama = $request->nama;
    $data->alamat = $request->alamat;
    $data->save();
    return redirect('/pelanggan');
});

Route::delete('/pelanggan/{id}', function ($id) {
    $data = pelanggan::find($id);
    $data->delete();
    return redirect('/pelanggan');
});

Route::post('/penjualan', function (Request $request) {
    $data = new penjualan;
    $data->tanggal = $request->tanggal;
    $data->total = $request->total;
    $data->save();
    return redirect('/penjualan');
});

Route::put('/penjualan/{id}', function (Request $request, $id) {
    $data = penjualan::find($id);
    $data->tanggal = $request->tanggal;
    $data->total = $request->total;
    $data->save();
    return redirect('/penjualan');
});

Route::delete('/penjualan/{id}', function ($id) {
    $data = penjualan::find($id);
    $data->delete();
    return redirect('/penjualan');
});


Route::post('/detailpenjualan', function (Request $request) {
    $data = new detailpenjualan;
    $data->namaproduk = $request->namaproduk;
    $data->harga = $request->harga;
    $data->jumlahproduk = $request->jumlahproduk;
    $data->penjualan_id = $request->penjualan_id;
    $data->save();
    return redirect('/detailpenjualan');
});

Route::put('/detailpenjualan/{id}', function (Request $request, $id) {
    $data = detailpenjualan::find($id);
    $data->namaproduk = $request->namaproduk;
    $data->harga = $request->harga;
    $data->jumlahproduk = $request->jumlahproduk;
    $data->penjualan_id = $request->penjualan_id;
    $data->save();
    return redirect('/detailpenjualan');
});


Route::delete('/detailpenjualan/{id}', function ($id) {
    $data = detailpenjualan::find($id);
    $data->delete();
    return redirect('/detailpenjualan');
});
















