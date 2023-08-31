<?php

namespace App\Http\Controllers;

use App\Models\JenisLaundry;
use Illuminate\Http\Request;

class JenisLaundryController extends Controller
{
    public function index(){
        $jenis_laundry = JenisLaundry::all();
        $jumlah_pembeli = $jenis_laundry->count();
        return view('jenis_laundry.index', compact('jenis_laundry','jumlah_pembeli'));
    }

    public function edit($id){
        $laundry = JenisLaundry::find($id);
        return view('jenis_laundry.edit', compact('laundry'));
    } 

    public function update(Request $request, $id){
        $laundry = JenisLaundry::find($id);
        $laundry->kode_jenis_laundry = $request->kode_jenis_laundry;
        $laundry->nama_laundry = $request->nama_laundry;
        $laundry->harga = $request->harga;
        $laundry->update();

         return redirect('jenis_laundry');
    }


}
