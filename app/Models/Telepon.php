<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;

    protected $table = 'telepon';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nomor_telepon'];

    public function pembeli(){
        return $this->belongsTo('App\Models\data_pembeli', 'id');
    }
}
