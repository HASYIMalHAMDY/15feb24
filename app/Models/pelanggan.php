<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $primaryKey = 'pelangganID';
    protected $fillable = [
        'pelangganID',
        'namapelanggan',
        'alamat',
        'nomortelepon',];
    public function detailpenjualan()
    {
        return $this->hasMany(detailpenjualan::class, 'id_pelanggan', 'id');
    }
    // $table->integer('pelangganID');
    // $table->string('namapelanggan');
    // $table->text('alamat');
    // $table->string('nomortelepon');
}
