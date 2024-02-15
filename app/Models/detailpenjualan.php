<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailpenjualan extends Model
{
    use HasFactory;
    protected $table = 'detailpenjualan';
    protected $primaryKey = 'detailID';
    protected $fillable = [
        'detailID',
        'penjualanID',
        'produkID',
        'jumlahproduk',
        'subtotal',];

        // $table->integer('detailID');
        //     $table->integer('penjualanID');
        //     $table->integer('produkID');
        //     $table->integer('jumlahproduk');
        //     $table->decimal('subtotal');
    public function penjualan()
    {
        return $this->belongsTo(penjualan::class, 'id_penjualan', 'id');
    }


}
