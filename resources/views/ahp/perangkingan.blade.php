@extends('layout.main')
@section('kriteria')
    <div class="content-wrapper">
        <div class="main-content">
            <div class="container-fluid">
                <h2 class="text-center mt-2">Perangkingan</h2>
                <div class="card-body table-responsive p-0">

                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lampu</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perangkingan as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama_lampu }}</td>
                                    <td>{{ $data->total_score }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
