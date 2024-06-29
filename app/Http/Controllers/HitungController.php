<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kriteria;

class HitungController extends Controller
{
    //
    public function showBobot(){

        $kriteria = Kriteria::all();
        //bobot Harga
        $bobotHarga = DB::table('bobot_harga')->get();
        //bobot Daya
        $bobotDaya = DB::table('bobot_daya_watt')->get();
        //bobot ketahanan
        $bobotKetahanan = DB::table('bobot_ketahanan')->get();
        //bobot kualitas
        $bobotKualitas = DB::table('bobot_kualitas')->get();
        //bobot cahaya_lumen
        $bobotCahaya = DB::table('bobot_cahaya_lumen')->get();

        return view('ahp.hasil-alternatif', compact('kriteria','bobotHarga','bobotDaya','bobotKetahanan','bobotKualitas','bobotCahaya'));
    }

    public function perangkingan(){
        //bobot Harga
        $bobotHarga = DB::table('bobot_harga')->get();
        //bobot Daya
        $bobotDaya = DB::table('bobot_daya_watt')->get();
        //bobot ketahanan
        $bobotKetahanan = DB::table('bobot_ketahanan')->get();
        //bobot kualitas
        $bobotKualitas = DB::table('bobot_kualitas')->get();
        //bobot cahaya_lumen
        $bobotCahaya = DB::table('bobot_cahaya_lumen')->get();


        $combinedData = [];

        foreach ($bobotHarga as $item) {
            $combinedData[$item->nama_lampu]['nama_lampu'] = $item->nama_lampu;
            $combinedData[$item->nama_lampu]['bobot_harga'] = $item->bobot;
        }

        foreach ($bobotDaya as $item) {
            $combinedData[$item->nama_lampu]['bobot_daya'] = $item->bobot;
        }

        foreach ($bobotKetahanan as $item) {
            $combinedData[$item->nama_lampu]['bobot_ketahanan'] = $item->bobot;
        }

        foreach ($bobotKualitas as $item) {
            $combinedData[$item->nama_lampu]['bobot_kualitas'] = $item->bobot;
        }

        foreach ($bobotCahaya as $item) {
            $combinedData[$item->nama_lampu]['bobot_cahaya'] = $item->bobot;
        }

        // Mengirim data ke view
        return view('ahp.perangkingan', compact('combinedData'));
    }
}
