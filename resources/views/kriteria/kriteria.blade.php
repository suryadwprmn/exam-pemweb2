@extends('layout.main')
@section('kriteria')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kriteria</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <br>
                                <button class="btn btn-primary">
                                    <a href="{{ route('customer.kriteria.create') }}" class="text-white">Tambah Kriteria</a>
                                </button>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Label</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kriteria as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->kode_kriteria }}</td>
                                                <td>{{ $d->nama_kriteria }}</td>
                                                <td>{{ $d->label }}</td>
                                                <td>
                                                    <a href="{{ route('customer.kriteria.edit', $d->id) }}"
                                                        class="btn btn-warning"><i class="fas fa-pen">Edit</i></a>
                                                    <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}"
                                                        class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="modal-hapus{{ $d->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Konfirmasi hapus</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah kamu ingin menghapus data
                                                                <b>{{ $d->nama_kriteria }}</b>?
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <form
                                                                action="{{ route('customer.kriteria.destroy', ['id' => $d->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Ya,
                                                                    hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
