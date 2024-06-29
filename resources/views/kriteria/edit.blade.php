@extends('layout.main')
@section('kriteria')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Kriteria</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Kriteria</li>
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
                            <div class="card-header">
                                <h3 class="card-title">Edit Kriteria</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('customer.kriteria.update', $kriteria->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="kode">Kode Kriteria</label>
                                        <input type="text" name="kode" class="form-control" id="kode"
                                            value="{{ $kriteria->kode_kriteria }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_kriteria">Nama Kriteria</label>
                                        <input type="text" name="nama_kriteria" class="form-control" id="nama_kriteria"
                                            value="{{ $kriteria->nama_kriteria }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="label">Label</label>
                                        <select class="form-control" id="label" name="label">
                                            <option value="cost">Cost</option>
                                            <option value="benefit">Benefit</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
