<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- My CSS -->
</head>
<body>

            <div class="container">
            <h4>Tambah Data Pembeli</h4>
            <div class="course">
                <div class="box"> 
             @if (count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif 
            <form action="{{ route('data_pembeli.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kode Peminjam</label><input type="text" name="kode_pemebeli" class="form-control">
                </div>
                <div class="form-group">
                    <label>nama Peminjam</label>
                    <input type="text" name="nama_pembeli" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Peminjam</label>
                    <select name="id_jenis_kelamin" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        @foreach ($list_jenis_kelamin as $key => $value)
                        <option value="{{ $key }}">
                            {{ $value }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" id="" cols="148" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control">
                </div>
                <div >
                   <button type="submit">Simpan</button>
                </div>
            </form> 
         </div>
    </div>
        </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



{{-- 
<div>
    <main>
    <div >
        <div>
        <h4>Tambah Data Pembeli</h4>
        <div class="course">
            <div class="box"> 
         @if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif 
        <form action="{{ route('data_pembeli.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Kode Peminjam</label><input type="text" name="kode_pemebeli" class="form-control">
            </div>
            <div class="form-group">
                <label>nama Peminjam</label>
                <input type="text" name="nama_pembeli" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Peminjam</label>
                <select name="id_jenis_kelamin" class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    @foreach ($list_jenis_kelamin as $key => $value)
                    <option value="{{ $key }}">
                        {{ $value }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="" cols="148" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control">
            </div>
            <div >
               <button type="submit">Simpan</button>
            </div>
        </form> 
     </div>
</div>
    </div>
    </div>
    </div>
</div>
 --}}

