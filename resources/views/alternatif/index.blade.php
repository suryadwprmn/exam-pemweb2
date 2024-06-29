@extends('layout.main')
@section('kriteria')
@section('cssdatatable')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
@endsection
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Alternatif</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Alternatif</li>
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
                            <button class="btn btn-primary mt-2 ml-2">
                                <a href="{{ route('customer.alternatif.create') }}" class="text-white">Tambah
                                    Alternatif</a>
                            </button>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="tableAlternatif">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lampu</th>
                                        <th>Harga</th>
                                        <th>Daya Watt</th>


                                        <th>Ketahanan</th>
                                        <th>Kualitas</th>
                                        <th>Cahaya Lumen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatif as $al)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $al->nama_lampu }}</td>
                                            <td>{{ $al->harga }}</td>
                                            <td>{{ $al->daya_watt }}</td>
                                            <td>{{ $al->ketahanan }}</td>
                                            <td>{{ $al->kualitas }}</td>
                                            <td>{{ $al->cahaya_lumen }}</td>
                                            <td>
                                                <a href="{{ route('customer.alternatif.edit', $al->id) }}"
                                                    class="btn btn-warning"><i class="fas fa-pen">Edit</i></a>
                                                <a data-toggle="modal" data-target="#modal-hapus{{ $al->id }}"
                                                    class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modal-hapus{{ $al->id }}">
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
                                                            <b>{{ $al->nama_lampu }}</b>?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <form
                                                            action="{{ route('customer.alternatif.delete', ['id' => $al->id]) }}"
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

@section('scriptdatatable')
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#tableAlternatif').DataTable();
    });
</script>
@endsection
