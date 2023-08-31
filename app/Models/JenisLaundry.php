<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLaundry extends Model
{
    use HasFactory;

    protected $table = "jenis_laundry";
    // protected $fillable = ['harga'];

    public function data_pembeli(){
        return $this->belongsToMany('App\Models\DataPembeli', 'transaksi','nama_konsumen','jenis_cuci');
    }
    
    public function transaksi(){
        $this->hasMany('App\Models\Transaksi', 'nama_pembeli');
    }

    // public function getHargaPaket($kode_jenis_laundry){
    //     $this->db->where('kode_jenis_laundry', $kode_jenis_laundry);
    //     return $this->db->get('jenis_laundry')->row_array();
    
    // }
}
