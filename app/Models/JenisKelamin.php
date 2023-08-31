<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    use HasFactory;

    protected $table = 'jenis_kelamin';

    protected $fillable = ['nama_jenis_kelamin'];

    public function data_pembeli(){
        return $this->hasMany('App\Models\DataPembeli', 'id_jenis_kelamin');
    }
}
