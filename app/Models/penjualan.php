<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualans';
    protected $primaryKey = 'penjualanID';
    protected $fillable = [
        'penjualanID',
        'tanggalpenjualan',
        'totalharga',
        'pelangganid',];
    public function detailpenjualan()
    {
        return $this->hasMany(detailpenjualan::class, 'id_penjualan', 'id');
    }
    // $table->integer('penjualanID');
    // $table->date('tanggalpenjualan');
    // $table->decimal('totalharga');
    // $table->integer('pelangganid');
}
