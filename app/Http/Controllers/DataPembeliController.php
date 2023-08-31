<?php

namespace App\Http\Controllers;

use App\Models\DataPembeli;
use App\Models\JenisKelamin;
use App\Models\Telepon;
use Illuminate\Http\Request;


class DataPembeliController extends Controller
{
    public function index(){
        $data_pembeli = DataPembeli::all();
        $jumlah_pembeli = $data_pembeli->count();
        return view('data_pembeli.index', compact('data_pembeli','jumlah_pembeli'));
    }

    public function create(){
        $list_jenis_kelamin = JenisKelamin::pluck('nama_jenis_kelamin','id_jenis_kelamin');
        return view('data_pembeli.create', compact('list_jenis_kelamin'));
    }

    public function store(Request $request){
        $data_pembeli = new DataPembeli;
        $data_pembeli->kode_pemebeli = $request->kode_pemebeli;
        $data_pembeli->nama_pembeli = $request->nama_pembeli;
        $data_pembeli->id_jenis_kelamin = $request->id_jenis_kelamin;
        $data_pembeli->alamat = $request->alamat;
        $data_pembeli->save();

        $telepon = new Telepon;
        $telepon->nomor_telepon = $request->telepon;
        $data_pembeli->telepon()->save($telepon);
        return redirect('data_pembeli');
    }
    public function edit($id){
        $pembeli = DataPembeli::find($id);
        if (!empty($pembeli->telepon->nomor_telepon)) {
            $pembeli->nomor_telepon = $pembeli->telepon->nomor_telepon;
        }
        $list_jenis_kelamin = JenisKelamin::pluck('nama_jenis_kelamin', 'id_jenis_kelamin');
        return view('data_pembeli.edit', compact('pembeli', 'list_jenis_kelamin'));
    } 
    public function update(Request $request, $id){
        $data_pembeli = DataPembeli::find($id);
        $data_pembeli->kode_pemebeli = $request->kode_pemebeli;
        $data_pembeli->nama_pembeli = $request->nama_pembeli;
        $data_pembeli->id_jenis_kelamin = $request->id_jenis_kelamin;
        $data_pembeli->alamat = $request->alamat;
        $data_pembeli->update();

        if ($data_pembeli->telepon) {

            if ($request->filled('nomor_telepon')) {
               $telepon = $data_pembeli->telepon;
               $telepon->nomor_telepon = $request->input('nomor_telepon');
               $data_pembeli->telepon()->save($telepon);
            }else{
               $data_pembeli->telepon()->delete();
            }
            
         }else{
            if ($request->filled('nomor_telepon')) {
               $telepon = new Telepon();
               $telepon->nomor_telepon = $request->nomor_telepon;
               $data_pembeli->telepon()->save($telepon);
            }
         }
         return redirect('data_pembeli');
    }

    public function destroy($id){
        $data_pembeli = DataPembeli::find($id);
        $data_pembeli->delete();
        return redirect('data_pembeli');
    }
}
