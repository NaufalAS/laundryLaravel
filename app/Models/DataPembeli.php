<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembeli extends Model
{
    use HasFactory;

    protected $table = 'data_pembeli';

    public function telepon(){
        return $this->hasOne('App\Models\Telepon', 'id');
    }

    public function jenis_kelamin(){
        return $this->belongsTo('App\Models\JenisKelamin', 'id_jenis_kelamin');
    }

    public function jenis_laundry(){
        return $this->belongsToMany('App\Models\JenisLaundry', 'transaksi','nama_konsumen','jenis_cuci');
    }

    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi', 'nama_konsumen');
    }
}
