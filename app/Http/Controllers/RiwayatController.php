<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\DataPembeli;
use App\Models\JenisLaundry;
use PDF;


class RiwayatController extends Controller
{

    public function index(){
        $transaksi = Transaksi::all();
        $jumlah_transaksi = $transaksi->count();
        return view('riwayat.index', compact('transaksi','jumlah_transaksi'));
    }

    public function store(Request $request){
        $transaksi = new Transaksi;
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->nama_konsumen = $request->nama_konsumen;
        $transaksi->jenis_cuci = $request->jenis_cuci;
        $transaksi->tgl_transaksi = $request->tgl_transaksi;
        $transaksi->tgl_pengambilan = $request->tgl_pengambilan;
        $transaksi->kilogram = $request->kilogram;
        $transaksi->harga = $request->harga;
        $transaksi->status = $request->status;
        $transaksi->save();

        return redirect('riwayat');
    }

    public function edit($id){
        $riwayat = Transaksi::find($id);
        $list_data_pembeli = DataPembeli::pluck('nama_pembeli', 'id');
        $list_jenis_cuci = JenisLaundry::pluck('nama_laundry', 'id');
        return view('riwayat.edit', compact('riwayat', 'list_data_pembeli', 'list_jenis_cuci'));
    } 
    public function update(Request $request, $id){
        $transaksi = Transaksi::find($id);
        $transaksi->kode_transaksi = $request->kode_transaksi;
        // $transaksi->nama_konsumen = $request->nama_konsumen;
        // $transaksi->jenis_cuci = $request->jenis_cuci;
        $transaksi->tgl_transaksi = $request->tgl_transaksi;
        $transaksi->tgl_pengambilan = $request->tgl_pengambilan;
        $transaksi->kilogram = $request->kilogram;
        $transaksi->harga = $request->harga;
        $transaksi->status = $request->status;
        $transaksi->update();
       
         return redirect('riwayat');
    }

    public function riwayat_pdf(){
        $transaksi = Transaksi::all();
        $pdf = PDF::loadview('riwayat/riwayat_pdf',['transaksi' => $transaksi]);
        return $pdf->download('laporan.pdf');
    }

    public function riwayat_transaksi($id)
    {
        $riwayat = Transaksi::findOrFail($id);
        $pdf = PDF::loadview('riwayat/riwayat_pdf_transaksi', ['riwayat' => $riwayat]);
        return $pdf->download('laporan.pdf');
    }
    
    
}
