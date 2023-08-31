@extends('layouts.master')

@section('content')

<main>
    <div >
        <div class="head-title">
            <div class="left">
                <h3>Riwayat Transaki</h3>
               
            </div>
            <a href="{{ route('riwayat.riwayat_pdf') }}" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Download PDF</span>
            </a>
        </div>
        <div class="table-data">
            <div class="order">
                
         {{-- @include('_partial/flash_message')  --}}
           {{-- <form action="{{ route('data_peminjam.search') }}" method="GET">@csrf
            <input type="text" name="kata" placeholder="cari...">
        </form>  --}}
        <table class="demo-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Transaksi</th>
                    <th>Nama Pembeli</th>
                    <th>Jenis Cuci</th>
                    <th>Tanggal Transaksi</th>
                   <th>Tanggal Pengambilan</th>
                    <th>Kilogram</th>
                    <th>Total Harga</th>
                    <th>status</th>
                    <th>edit</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $riwayat)
                    <tr>
                        <td>{{ $riwayat->id }}</td>
                        <td>{{ $riwayat->kode_transaksi }}</td>
                        <td>{{ $riwayat->data_pembeli['nama_pembeli'] }}</td>
                        <td>{{ $riwayat->jenis_laundry['nama_laundry'] }}</td>
                        <td>{{ $riwayat->tgl_transaksi }}</td>
                        <td>{{ $riwayat->tgl_pengambilan }}</td>
                        <td>{{ $riwayat->kilogram }}</td>
                        <td>{{ $riwayat->harga }}</td>
                        <td>{{ $riwayat->status }}</td>
                        <td><a href="{{ route('riwayat.edit', $riwayat->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                        <td><a href="{{ route('riwayat.riwayat_pdf_transaksi', $riwayat->id) }}" class="btn btn-primary btn-sm">Print</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
     </div>
     <div class="pull-left">
        <strong>
            jumlah Peminjam : {{ $jumlah_transaksi }}
        </strong>
        {{-- <p>{{ $data_pembeli->links() }}</p> --}}
    </div> 
     </div>
     </div>
     </div>

    </main>
@endsection 


