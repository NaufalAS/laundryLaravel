@extends('layouts.master')

@section('content')
<main>
<div >
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Data Peminjam</h3>
                <p align="center"><a href="{{ route('data_pembeli.create') }}" class="btn btn_primary">Tambah Data Pembeli</a></p> 
            </div>
           
                
         {{-- @include('_partial/flash_message')  --}}
           {{-- <form action="{{ route('data_peminjam.search') }}" method="GET">@csrf
            <input type="text" name="kata" placeholder="cari...">
        </form>  --}}
        <table >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Peminjam</th>
                    <th>Nama Peminjam</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                   <th>Nomor Telepon</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_pembeli as $pembeli)
                    <tr>
                        <td>{{ $pembeli->id }}</td>
                        <td>{{ $pembeli->kode_pemebeli }}</td>
                        <td>{{ $pembeli->nama_pembeli }}</td>
                        <td>{{ $pembeli->jenis_kelamin['nama_jenis_kelamin'] }}</td>
                        <td>{{ $pembeli->alamat }}</td>
                        <td>{{ !empty($pembeli->telepon['nomor_telepon'])?
                                $pembeli->telepon['nomor_telepon'] : '-'
                                 }}</td>
                        <td>
                            <form action="{{ route('data_pembeli.edit', $pembeli->id) }}">
                            
                            @csrf
                            <button class="btn btn-warning btn-sm">edit</button>
                        </td>
                       <td>
                        <form action="{{ route('data_pembeli.destroy', $pembeli->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm" onclick="return confirm('Anda Yakin ingin menghapus data ini?')">Hapus</button>
                        </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
        <div class="pull-left">
            <strong>
                jumlah Peminjam : {{ $jumlah_pembeli }}
            </strong>
            {{-- <p>{{ $data_pembeli->links() }}</p> --}}
        </div> 
    </div>
     </div>
     </div>
    </div>
     </div>
    </div>
</div>
    </main>
@endsection 


{{-- @extends('layouts.master')

@section('content')
        <div class="main">
            <h1>Halaman Utama</h1>
            <p>Selamat datang di halaman utama!</p>
        </div>
@endsection --}}