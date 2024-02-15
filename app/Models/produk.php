<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primaryKey = 'produkID';
    protected $fillable = [
        'produkID',
        'namaproduk',
        'harga',
        'jumlahproduk',];

}
// $table->integer('produkID');
//             $table->string('namaproduk');
//             $table->decimal('harga');
//             $table->integer('jumlahproduk');
