@extends('layout.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Form Tambah Pelanggan</h1>
            </div>
        </div>
    </div>
</div>

<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3><strong>Silahkan masukkan data pelanggan</strong></h3>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Perhatian!</strong> Ada masalah dengan inputan Anda!<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('pelanggan.store') }}" id="myForm" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_pelanggan">Id Pelanggan</label>
                                <input type="text" name="id_pelanggan" class="form-control" id="id_pelanggan" aria-describedby="id_pelanggan" required="required">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" required="required">
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto</label> 
                                <input type="file" name="foto" class="form-control" id="foto" aria-describedby="foto" required="required">
                            </div>
                            
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control" id="jk" aria-describedby="jk" required="required">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" required="required">
                            </div>
                            
                            <div class="form-group">
                                <label for="tgl">Tanggal</label>
                                <input type="text" name="tgl" class="form-control" id="tgl" aria-describedby="tgl" required="required">
                            </div>
                            
                            <div class="form-group">
                                <label for="jenis">Jenis Kendaraan</label>
                                <input type="text" name="jenis" class="form-control" id="jenis" aria-describedby="jenis" required="required">
                            </div>
                            
                            <div class="form-group">
                                <label for="nopol">No. Polisi</label>
                                <input type="text" name="nopol" class="form-control" id="nopol" aria-describedby="nopol" required="required">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-danger">KEMBALI</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
