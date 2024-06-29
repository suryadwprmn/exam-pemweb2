@extends('layout.main')
@section('kriteria')

<div class="content-wrapper">
    <div class="main-content">
        <div class="container-fluid">
            <h2 class="text-center">Tabel Matriks</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->kode_kriteria }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriterias as $k1)
                        <tr>
                            <td>{{ $k1->kode_kriteria }}</td>
                            @foreach ($kriterias as $k2)
                                @php
                                    $nilai = $matriks->where('kriteria1', $k1->id)->where('kriteria2', $k2->id)->first();
                                @endphp
                                <td>{{ $nilai ? $nilai->nilai : '' }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    <tr>
                        <td>Total Kolom</td>
                        @foreach ($kriterias as $kriteria)
                            <td>{{ $sumMatriks[$kriteria->id] ?? '' }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>

            <h3 class="text-center mt-2">Normalisasi Matriks</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->kode_kriteria }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriterias as $k1)
                        <tr>
                            <td>{{ $k1->kode_kriteria }}</td>
                            @foreach ($kriterias as $k2)
                                <td>{{ $normalisasi[$k1->id][$k2->id] ?? '' }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h3 class="text-center">Tabel Bobot</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriterias as $kriteria)
                        <tr>
                            <td>{{ $kriteria->kode_kriteria }}</td>
                            <td>{{ $bobot[$kriteria->id] ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h3 class="text-center">Tabel Eigen Value</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>Eigen Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriterias as $kriteria)
                        <tr>
                            <td>{{ $kriteria->kode_kriteria }}</td>
                            <td>{{ $eigenValues[$kriteria->id] ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h3 class="text-center">Nilai T</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>T Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nilai T</td>
                        <td>{{ $tValue }}</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="text-center">Nilai CI</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>CI Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nilai CI</td>
                        <td>{{ $ci }}</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="text-center">Nilai RI</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>RI Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nilai RI</td>
                        <td>{{ $ri }}</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="text-center">Nilai CR</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>CR Value</th>
                        <th>Konsisten / Tidak Konsisten </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nilai CR</td>
                        <td>{{ $cr }}</td>
                        <td>{{ $konsisten }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
