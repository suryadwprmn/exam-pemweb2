<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = Kriteria::get();

        return view('kriteria.kriteria',compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validator = Validator::make($request->all(),[
        'kode' => 'required',
        'nama_kriteria' => 'required',
        'label' => 'required|in:cost,benefit',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    $data = new Kriteria();
    $data->kode_kriteria = $request->kode;
    $data->nama_kriteria = $request->nama_kriteria;
    $data->label = $request->label;
    $data->save();

    return redirect()->route('customer.kriteria');
}


    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria, $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required',
            'nama_kriteria' => 'required',
            'label' => 'required|in:cost,benefit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $kriteria = Kriteria::findOrFail($id);
        $kriteria->kode_kriteria = $request->kode;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->label = $request->label;
        $kriteria->save();

        return redirect()->route('customer.kriteria')->with('success', 'Kriteria updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();

        return redirect()->route('customer.kriteria')->with('success', 'Kriteria deleted successfully.');
    }
}
