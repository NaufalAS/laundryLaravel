<?php

namespace App\Http\Controllers;

use App\Models\DataPembeli;
use App\Models\JenisLaundry;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    
    public function index()
{
    $list_data_pembeli = DataPembeli::pluck('nama_pembeli', 'id');
    $list_jenis_cuci = JenisLaundry::pluck('nama_laundry', 'id');
    $list_harga = JenisLaundry::pluck('harga', 'id');

    return view('transaksi.index', compact('list_data_pembeli', 'list_jenis_cuci', 'list_harga'));
}

    public function store(Request $request){
        $peminjaman = new Transaksi;
        $peminjaman->kode_transaksi = $request->kode_transaksi;
        $peminjaman->id_peminjam = $request->id_peminjam;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->tgl_peminjam = $request->tgl_peminjam;
        $peminjaman->tgl_pegembalian = $request->tgl_pegembalian;
        $peminjaman->save();

        return redirect('riwayat_transaksi');
    }

    // public function detail_peminjam($id){
    //     $halaman = 'data_peminjam';
    //     $data_peminjam = DataPembeli::findOrFail($id);
    //     return view('peminjaman.detail_peminjam', compact('halaman','data_peminjam'));
    // }

    // public function detail_buku($id){
    //     $halaman = 'data_buku';
    //     $data_buku = JenisLaundry::findOrFail($id);
    //     return view('peminjaman.detail_buku', compact('halaman','data_buku'));
    // }

}

