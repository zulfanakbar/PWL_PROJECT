@extends('layout.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Mekanik</h1>
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<!-- Tables -->
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-success" href="{{ route('mekanik.create') }}">Input Mekanik</a>
            </div>
            <div class="mx-auto pull-right">
                <div class="float-left">
                    <form action="{{ route('mekanik.index') }}" method="GET" role="search">                           
                        <div class="input-group">
                            <a href="{{ route('mekanik.index') }}" class="mr-4 mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        <span class="fas fa-sync-alt">Refresh</span>
                                    </button>
                                </span>
                            </a>
                            
                            <input type="text" class="form-control mr-4 mt-1" name="term" placeholder="Search" id="term">
                            <span class="input-group-btn mr-2 mt-1">
                                <input type="submit" value="Cari" class="btn btn-primary">
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-12">
                <div class="default-table">
                    <table>
                        <caption></caption>
                        <thead>
                            <tr>
                                <th scope="">Id Mekanik</th>
                                <th scope="">Nama Mekanik</th>
                                <th scope="">Foto</th>
                                <th scope="">Jenis Kelamin</th>
                                <th scope="">Alamat</th>
                                <th scope="">Telepon</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mekanik as $Mekanik)
                            <tr>
                                <td>{{ $Mekanik->id_mekanik }}</td>
                                <td>{{ $Mekanik->nama }}</td>
                                <td><img width="200px" src="{{asset('storage/'.$Mekanik->foto)}}" alt=""></td>
                                <td>{{ $Mekanik->jk }}</td>
                                <td>{{ $Mekanik->alamat }}</td>
                                <td>{{ $Mekanik->telepon }}</td>
                                <td>
                                    <form action="{{ route('mekanik.destroy', $Mekanik->id_mekanik ) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data barang?')">
                                    <a class="btn btninfo" href="{{ route('mekanik.show', $Mekanik->id_mekanik) }}">Show</a>
                                    <a class="btn btnprimary" href="{{ route('mekanik.edit', $Mekanik->id_mekanik) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $mekanik->links() }}
                    <!-- TARUH LINKS DISINI-->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
