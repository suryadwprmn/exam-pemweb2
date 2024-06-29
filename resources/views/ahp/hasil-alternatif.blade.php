@extends('layout.main')
@section('kriteria')

<div class="content-wrapper">
    <div class="main-content">
        <div class="container-fluid">


                    <h2 class="text-center mt-2">Bobot Harga</h2>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Lampu</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bobotHarga as $data)
                                    <tr>
                                        <td>{{ $data->nama_lampu }}</td>
                                        <td>{{ $data->bobot }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h2 class="text-center mt-2">Bobot Daya Watt</h2>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Lampu</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bobotDaya as $data)
                                    <tr>
                                        <td>{{ $data->nama_lampu }}</td>
                                        <td>{{ $data->bobot }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h2 class="text-center mt-2">Bobot Ketahanan</h2>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Lampu</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bobotKetahanan as $data)
                                    <tr>
                                        <td>{{ $data->nama_lampu }}</td>
                                        <td>{{ $data->bobot }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h2 class="text-center mt-2">Bobot Kualitas</h2>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Lampu</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bobotKualitas as $data)
                                    <tr>
                                        <td>{{ $data->nama_lampu }}</td>
                                        <td>{{ $data->bobot }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h2 class="text-center mt-2">Bobot Cahaya Lumen</h2>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Lampu</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bobotCahaya as $data)
                                    <tr>
                                        <td>{{ $data->nama_lampu }}</td>
                                        <td>{{ $data->bobot }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

        </div>
    </div>
</div>

@endsection
