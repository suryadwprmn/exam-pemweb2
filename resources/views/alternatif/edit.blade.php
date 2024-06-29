@extends('layout.main')
@section('kriteria')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Alternatif</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Alternatif</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('customer.alternatif.update', $alternatif->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nama_lampu">Nama Lampu</label>
                                        <input type="text" name="nama_lampu" class="form-control" id="nama_lampu"
                                            value="{{ $alternatif->nama_lampu }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" name="harga" class="form-control" id="harga"
                                            value="{{ $alternatif->harga }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="daya_watt">Daya Watt</label>
                                        <input type="number" name="daya_watt" class="form-control" id="daya_watt"
                                            value="{{ $alternatif->daya_watt }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ketahanan">Ketahanan</label>
                                        <input type="number" name="ketahanan" class="form-control" id="ketahanan"
                                            value="{{ $alternatif->ketahanan }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kualitas">Kualitas</label>
                                        <input type="number" name="kualitas" class="form-control" id="kualitas"
                                            value="{{ $alternatif->kualitas }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cahaya_lumen">Cahaya Lumen</label>
                                        <input type="number" name="cahaya_lumen" class="form-control" id="cahaya_lumen"
                                            value="{{ $alternatif->cahaya_lumen }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('customer.alternatif') }}" class="btn btn-secondary">Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
