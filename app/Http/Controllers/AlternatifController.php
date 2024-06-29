<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatif = Alternatif::all();
        $kriteria = Kriteria::all();
        return view('alternatif.index', compact('alternatif','kriteria'));
    }

    public function create()
    {
        return view('alternatif.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lampu' => 'required',
            'harga' => 'required',
            'daya_watt' => 'required',
            'ketahanan' => 'required',
            'kualitas' => 'required',
            'cahaya_lumen' => 'required',
        ]);
        var_dump($request->all());

        Alternatif::create($request->all());

        return redirect()->route('customer.alternatif')->with('success', 'Alternatif created successfully.');
    }

    public function edit($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        return view('alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lampu' => 'required',
            'harga' => 'required',
            'daya_watt' => 'required',
            'ketahanan' => 'required',
            'kualitas' => 'required',
            'cahaya_lumen' => 'required',
        ]);

        $alternatif = Alternatif::findOrFail($id);
        $alternatif->update($request->all());

        return redirect()->route('customer.alternatif')->with('success', 'Alternatif updated successfully.');
    }

    public function destroy($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();

        return redirect()->route('customer.alternatif')->with('success', 'Alternatif deleted successfully.');
    }
}
