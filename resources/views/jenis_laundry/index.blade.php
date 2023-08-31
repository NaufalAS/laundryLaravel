@extends('layouts.master')

@section('content')
<main>
<div >
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Jenis Laundry</h3>
                {{-- <p align="center"><a href="{{ route('jenis_laundry.create') }}" class="btn btn_primary">Tambah Jenis Laundry</a></p>  --}}
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
                    <th>harga</th>
                    <th>Edit</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($jenis_laundry as $laundry)
                    <tr>
                        <td>{{ $laundry->id }}</td>
                        <td>{{ $laundry->kode_jenis_laundry }}</td>
                        <td>{{ $laundry->nama_laundry }}</td>
                        <td>{{ $laundry->harga }}</td>
                        <td>
                            <form action="{{ route('jenis_laundry.edit', $laundry->id) }}">
                            
                            @csrf
                            <button class="btn btn-warning btn-sm">edit</button>
                        </td>
                       {{-- <td>
                        <form action="{{ route('jenis_laundry.destroy', $laundry->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm" onclick="return confirm('Anda Yakin ingin menghapus data ini?')">Hapus</button>
                        </form> 
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table> 
        <div class="pull-left">
            <strong>
                jumlah Laundry : {{ $jumlah_pembeli }}
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