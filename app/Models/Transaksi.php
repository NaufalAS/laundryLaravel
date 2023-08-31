<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    public function data_pembeli(){
        return $this->belongsTo('App\Models\DataPembeli', 'nama_konsumen');
    }

    public function jenis_laundry(){
        return $this->belongsTo('App\Models\JenisLaundry', 'jenis_cuci');
    }
}
