<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <center>
        <h5>Laporan Transaksi</h5>
    </center>
    <div>
        <div>
        <table>
            <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Transaksi</th>
            <th scope="col">Nama Konsumen</th>
            <th scope="col">Jenis Cuci</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Tanggal Pengambilan</th>
            <th scope="col">Kilogram</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
          
            <tr>
                <th value="{{ $riwayat->id }}">{{ $riwayat->id }}</th>
                <td value="{{ $riwayat->kode_transaksi }}">{{ $riwayat->kode_transaksi }}</td>
                <td value="{{ $riwayat->data_pembeli['nama_pembeli'] }}"> {{ $riwayat->data_pembeli['nama_pembeli'] }}</td>
                <td value="{{ $riwayat->jenis_laundry['nama_laundry'] }}">{{ $riwayat->jenis_laundry['nama_laundry'] }}</td>
                <td value="{{ $riwayat->tgl_transaksi }}">{{ $riwayat->tgl_transaksi }}</td>
                <td value="{{ $riwayat->tgl_pengambilan }}">{{ $riwayat->tgl_pengambilan }}</td>
                <td  value="{{ $riwayat->kilogram }}">{{ $riwayat->kilogram }}</td>
                <td value="{{ $riwayat->harga }}">{{ $riwayat->harga }}</td>
                <td value="{{ $riwayat->status }}">{{ $riwayat->status }}</td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
