@extends('layout.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Sparepart</h1>
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
                <a class="btn btn-success" href="{{ route('sparepart.create') }}">Input Sparepart</a>
            </div>
            <div class="mx-auto pull-right">
                <div class="float-left">
                    <form action="{{ route('sparepart.index') }}" method="GET" role="search">                           
                        <div class="input-group">
                            <a href="{{ route('sparepart.index') }}" class="mr-4 mt-1">
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
                                <th scope="">Id Sparepart</th>
                                <th scope="">Sparepart</th>
                                <th scope="">Stok</th>
                                <th scope="">Harga</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sparepart as $Sparepart)
                            <tr>
                                <td>{{ $Sparepart->id_sparepart }}</td>
                                <td>{{ $Sparepart->sparepart }}</td>
                                <td>{{ $Sparepart->stok }}</td>
                                <td>{{ $Sparepart->harga }}</td>
                                <td>
                                    <form action="{{ route('sparepart.destroy', $Sparepart->id_sparepart ) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data barang?')">
                                    <a class="btn btninfo" href="{{ route('sparepart.show', $Sparepart->id_sparepart ) }}">Show</a>
                                    <a class="btn btnprimary" href="{{ route('sparepart.edit', $Sparepart->id_sparepart ) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $sparepart->links() }}
                    <!-- TARUH LINKS DISINI-->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
