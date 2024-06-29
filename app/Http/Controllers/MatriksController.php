<?php

namespace App\Http\Controllers;
use App\Models\Matriks;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatriksController extends Controller
{
    //
    public function index()
    {
        $kriteria = Kriteria::all();
        $matriks = Matriks::all();
        return view('ahp.index', compact('kriteria', 'matriks'));
    }
    public function store(Request $request)
    {
        $kriteria = Kriteria::all();
        Matriks::truncate();

        foreach ($kriteria as $kriteria1) {
            foreach ($kriteria as $kriteria2) {
                if ($kriteria1->id == $kriteria2->id) {
                    // Jika kriteria sama, masukkan nilai 1
                    Matriks::create([
                        'kriteria1' => $kriteria1->id,
                        'kriteria2' => $kriteria2->id,
                        'nilai' => 1
                    ]);
                } else if ($kriteria1->id < $kriteria2->id) {
                    // Ambil nilai input dari form
                    $nilai = $request->input('nilai_' . $kriteria1->id . '_' . $kriteria2->id);

                    // Simpan nilai untuk kriteria1 dan kriteria2
                    Matriks::create([
                        'kriteria1' => $kriteria1->id,
                        'kriteria2' => $kriteria2->id,
                        'nilai' => $nilai
                    ]);

                    // Simpan nilai perbandingan untuk kriteria2 dan kriteria1
                    $perbandingan = 1 / $nilai;
                    Matriks::create([
                        'kriteria1' => $kriteria2->id,
                        'kriteria2' => $kriteria1->id,
                        'nilai' => $perbandingan
                    ]);
                }
            }
        }

        return redirect()->route('customer.storeMatriks')->with('success', 'Matriks berhasil disimpan.');
    }

    public function matriks()
    {
        $kriterias = Kriteria::all();
        $matriks =  Matriks::all();
        $sumMatriks = Matriks::selectRaw('kriteria2, SUM(nilai) as total')
                             ->groupBy('kriteria2')
                             ->pluck('total', 'kriteria2')->all();

        //Menghitung Normalisasi
        $normalisasi = [];
        foreach ($matriks as $item) {
            $normalisasi[$item->kriteria1][$item->kriteria2] = round($item->nilai / ($sumMatriks[$item->kriteria2] ?? 1), 3);
        }

        //Menghitung Bobot
        $bobot = [];
        foreach ($kriterias as $kriteria) {
            $sum = 0;
            foreach ($kriterias as $innerKriteria) {
                $sum += $normalisasi[$kriteria->id][$innerKriteria->id] ?? 0;
            }
            $bobot[$kriteria->id] = round($sum / count($kriterias), 3);
        }

        //Menghitung eigen values
        $eigenValues = [];
        foreach ($kriterias as $k1) {
            $eigenSum = 0;
            foreach ($kriterias as $k2) {
                $nilai = $matriks->where('kriteria1', $k1->id)->where('kriteria2', $k2->id)->first();
                if ($nilai) {
                    $eigenSum += $nilai->nilai * ($bobot[$k2->id] ?? 0);
                }
            }
            $eigenValues[$k1->id] = round($eigenSum, 3);
        }

        //Menghitung nilai t
        $totalEigenOverBobot = 0;
        foreach ($kriterias as $kriteria) {
            $totalEigenOverBobot += $eigenValues[$kriteria->id] / ($bobot[$kriteria->id] ?? 1);
        }
        $tValue = round($totalEigenOverBobot / count($kriterias), 3);

        //menghitung nilai CI
        $ci = ($tValue - count($kriterias))/ (count($kriterias) -1);

        $ri = 1.12;

        $cr = $ci / $ri;

        $konsisten =" ";
        if($cr <= 0.1){
            echo $konsisten .= "Konsisten";
        } else{
            echo $konsisten .= "Tidak Konsisten";
        }

        return view('ahp.hasil', compact('kriterias', 'matriks', 'sumMatriks', 'normalisasi', 'bobot', 'eigenValues','tValue', 'ci', 'ri', 'cr' ,'konsisten'));
    }
}
