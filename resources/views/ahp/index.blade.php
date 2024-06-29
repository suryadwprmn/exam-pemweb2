@extends('layout.main')
@section('kriteria')
    <div class="content-wrapper">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="panel col-md-6">
                        <div class="panel-heading">
                            <h3 class="page-title">Perhitungan Matriks</h3>
                            <h3 class="panel-title">Nilai Perbandingan Matriks</h3>


                        </div>
                        <div class="panel-body">
                            <form action="{{ route('customer.storeMatriks') }}" method="post">
                                @csrf
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Kriteria 1</th>
                                            <th>Nilai Banding</th>
                                            <th>Nama Kriteria 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kriteria as $kriteria1)
                                            @foreach ($kriteria as $kriteria2)
                                                @if ($kriteria1->id <= $kriteria2->id)
                                                    <tr>
                                                        <td>{{ $kriteria1->nama_kriteria }}</td>
                                                        <td>
                                                            @if ($kriteria1->id == $kriteria2->id)
                                                                <input type="text" class="form-control" value="1"
                                                                    readonly>
                                                            @else
                                                                <select class="form-control"
                                                                    name="nilai_{{ $kriteria1->id }}_{{ $kriteria2->id }}">
                                                                    <option value="1">{{ $kriteria1->nama_kriteria }}
                                                                        Sama Penting dengan {{ $kriteria2->nama_kriteria }}
                                                                        (Nilai = 1)
                                                                    </option>
                                                                    <option value="2">Nilai tengah diantara dua (Nilai
                                                                        = 2)</option>
                                                                    <option value="3">{{ $kriteria1->nama_kriteria }}
                                                                        Sedikit Lebih Penting daripada
                                                                        {{ $kriteria2->nama_kriteria }} (Nilai = 3)</option>
                                                                    <option value="4">Nilai tengah diantara dua (Nilai
                                                                        = 4)</option>
                                                                    <option value="5">{{ $kriteria1->nama_kriteria }}
                                                                        Lebih Penting (Nilai = 5)</option>
                                                                    <option value="6">Nilai tengah diantara dua (Nilai
                                                                        = 6)</option>
                                                                    <option value="7">{{ $kriteria1->nama_kriteria }}
                                                                        Sangat Penting (Nilai = 7)</option>
                                                                    <option value="8">Nilai tengah diantara dua (Nilai
                                                                        = 8)</option>
                                                                    <option value="9">{{ $kriteria1->nama_kriteria }}
                                                                        Sangat Penting (Nilai = 9)</option>
                                                                </select>
                                                            @endif
                                                        </td>
                                                        <td>{{ $kriteria2->nama_kriteria }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
