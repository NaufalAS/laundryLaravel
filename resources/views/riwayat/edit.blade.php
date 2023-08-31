 {{-- @extends('layouts.master')
@section('content')
    <div class="main">
        <h4>Edit</h4>
        <form method="POST"  action="{{ route('riwayat.update', $riwayat->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Kode Peminjam</label><input type="text" name="kode_transaksi" class="form-control" value="{{ $riwayat->kode_transaksi }}" readonly>
            </div>
            <div class="form-group">
                <select name="nama_konsumen" class="form-control">
                    <option value="">Pilih data peminjaman</option>
                    @foreach ($list_data_pembeli as $key => $value)
                    <option value="{{ $key }}">
                        {{ $value }}
                    </option>
                    @endforeach
                </select readonly> 
                <label>nama Konsumen</label>
                <input type="text" name="nama_konsumen" class="form-control" value="{{  $riwayat->data_pembeli['nama_pembeli'] }}" readonly>
            </div>
    
            <div class="form-group">
                <label>Jenis cuci</label>
                <select name="jenis_cuci" id="jenis_cuci" class="form-control">
                    <option value="">Pilih Jenis cuci</option>
                    @foreach ($list_jenis_cuci as $key => $value)
                    <option value="{{ $key }}" data-harga="{{ $list_harga[$key] }}">
                        {{ $value }}
                    </option>
                    @endforeach
                </select readonly>
                <label>nama Konsumen</label>
                <input type="text" name="jenis_cuci" class="form-control" value="{{  $riwayat->jenis_laundry['nama_laundry'] }}" readonly>
            </div>
            
            <div class="form-group">
                <label>Tanggal</label>
                <input type="text" name="tgl_transaksi" class="form-control" value="<?php echo date('Y-m-d'); ?>" value="{{ $riwayat->tgl_transaksi }}"readonly>
            </div>
            
    
            <div class="form-group">
                <label>Tanggal</label>
                <?php
                    $tanggal_setelah = date('Y-m-d', strtotime('+3 days'));
                ?>
                <input type="text" name="tgl_pengambilan" class="form-control" value="<?php echo $tanggal_setelah; ?>" value="{{ $riwayat->tgl_pengambilan }}" readonly>
            </div>
    
            <div class="form-group">
                <label>Kilogram</label>
                <input type="number" id="kilogram" name="kilogram" class="form-control" onchange="updateHarga()" value="{{ $riwayat->kilogram }}" readonly>
            </div>
            
            <div class="form-group">
                <label>Total Harga</label>
                <input type="text" id="total_harga" name="harga" class="form-control" value="{{ $riwayat->harga }}" readonly>
            </div>
            
            <div class="form-group">
                <label>Status Pembayaran</label>
                <select name="status" id="status" value="{{ $riwayat->status }}">
                    <option value="{{ $riwayat->status }}">Sudah Bayar</option>
                </select >
            </div>
            <div class="form-group">
                <label>Status Pembayaran</label>
                <select name="status" id="status">
                    @if ($riwayat->status == 'Belum Bayar')
                        <option value="Belum Bayar" selected>Belum Bayar</option>
                        <option value="Sudah Bayar">Sudah Bayar</option>
                    @else
                        <option value="Sudah Bayar" selected>Sudah Bayar</option>
                    @endif
                </select>
            </div>
            
            
             <div class="form-group">
                <label>Status Pembayaran</label>
                <select name="status" id="status">
                    @if ($riwayat->status == 'Belum Bayar')
                        <option value="Belum Bayar" selected>Belum Bayar</option>
                        <option value="Sudah Bayar">Sudah Bayar</option>
                    @else
                        <option value="Sudah Bayar" selected>Sudah Bayar</option>
                    @endif
                </select>
            </div>
            
            
            
            <div>
               <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Edit</h4>
        <form method="POST" action="{{ route('riwayat.update', $riwayat->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Kode Peminjam</label>
                <input type="text" name="kode_transaksi" readonly class="form-control" value="{{ $riwayat->kode_transaksi }}" readonly>
            </div>
            {{-- masih salah
            <div class="form-group">
                <label>Jenis kelamin</label>
                <select name="nama_konsumen" hidden>
                    <option value="">Pilih Jenis Kelamin</option>
                    @foreach ($list_data_pembeli as $key => $value)
                        <option value="{{ $key }}" {{ $riwayat->nama_konsumen == $key ? 'selected' : ''}}>
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            {{-- masih salah --}}
            {{-- <div class="form-group">
                <label>Jenis kelamin</label>
                <select name="jenis_cuci" hidden>
                    <option value="">Pilih Jenis Kelamin</option>
                    @foreach ($list_jenis_cuci as $key => $value)
                        <option value="{{ $key }}" {{ $riwayat->jenis_cuci == $key ? 'selected' : ''}}>
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
            </div> --}}

            <div class="form-group">
                <label>nama Peminjam</label>
                <input type="text" name="tgl_transaksi" class="form-control" value="{{ $riwayat->tgl_transaksi }}"readonly>
            </div>
           
            
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="tgl_pengambilan" class="form-control" value="{{ $riwayat->tgl_pengambilan }}" readonly>
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="kilogram" class="form-control" value="{{ $riwayat->kilogram }}" readonly>
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="harga" class="form-control" value="{{ $riwayat->harga }}" readonly>
            </div>

            <div class="form-group">
                <label>Status Pembayaran</label>
                <input value="{{$riwayat->status }}" readonly>
                <select name="status" id="status">
                    @if ($riwayat->status == 'Belum Bayar')
                        {{-- <option value="Belum Bayar" selected>Belum Bayar</option> --}}
                        <option value="Sudah Bayar" selected>Sudah Bayar</option>
                    @else
                        <option value="Sudah Bayar" selected>Sudah Bayar</option>
                    @endif
                </select>
            </div>
            

            <div >
               <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

