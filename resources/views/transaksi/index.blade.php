@extends('layouts.master')

@section('content')
<main>
<div class="main">
    <form action="{{ route('riwayat.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kode Peminjam</label><input type="text" name="kode_transaksi" class="form-control">
        </div>
        <div class="form-group">
            <label>nama pembeli</label>
            <select name="nama_konsumen" class="form-control">
                <option value="">Pilih data peminjaman</option>
                @foreach ($list_data_pembeli as $key => $value)
                <option value="{{ $key }}">
                    {{ $value }}
                </option>
                @endforeach
            </select>
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
            </select>
        </div>
        
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga_awal" id="harga" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" name="tgl_transaksi" class="form-control" value="<?php echo date('Y-m-d'); ?>">
        </div>
        

        <div class="form-group">
            <label>Tanggal</label>
            <?php
                $tanggal_setelah = date('Y-m-d', strtotime('+3 days'));
            ?>
            <input type="text" name="tgl_pengambilan" class="form-control" value="<?php echo $tanggal_setelah; ?>">
        </div>

        <div class="form-group">
            <label>Kilogram</label>
            <input type="number" id="kilogram" name="kilogram" class="form-control" onchange="updateHarga()">
        </div>
        
        <div class="form-group">
            <label>Total Harga</label>
            <input type="text" id="total_harga" name="harga" class="form-control" readonly>
        </div>
        
        <div class="form-group">
            <label>Status Pembayaran</label>
            <select name="status" id="status">
                <option value="Sudah Bayar">Sudah Bayar</option>
                <option value="Belum Bayar">Belum Bayar</option>
            </select>
        </div>
        <div >
           <button type="submit">Simpan</button>
        </div>
    </form> 
</div>
</main>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#jenis_cuci').change(function() {
            var harga = $(this).find(':selected').data('harga');
            $('#harga').val(harga);
        });

        $('#kilogram').change(function() {
            var hargaPerKg = parseInt($('#harga').val());
            var kilogram = parseInt($('#kilogram').val());
            var totalHarga = hargaPerKg * kilogram;
            
            $('#total_harga').val(totalHarga.toFixed());
        });
    });

   
</script>

