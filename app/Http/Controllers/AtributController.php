<?php

namespace App\Http\Controllers;

use App\Models\Atribut;
use Illuminate\Http\Request;

class AtributController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atributs = Atribut::all();
        return view('atributs.index', compact('atributs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atributs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga_barang' => 'required|string|max:255',
            'stok_barang' => 'required|in:tersedia,habis',
        ]);

        Atribut::create($validatedData);

        return redirect()->route('atributs.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atribut  $atribut
     * @return \Illuminate\Http\Response
     */
    public function show(Atribut $atribut)
    {
        return view('atributs.show', compact('atribut'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atribut  $atribut
     * @return \Illuminate\Http\Response
     */
    public function edit(Atribut $atribut)
    {
        return view('atributs.edit', compact('atribut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atribut  $atribut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atribut $atribut)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga_barang' => 'required|string|max:255',
            'stok_barang' => 'required|in:tersedia,habis',
        ]);

        $atribut->update($validatedData);

        return redirect()->route('atributs.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atribut  $atribut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atribut $atribut)
    {
        $atribut->delete();

        return redirect()->route('atributs.index')->with('success', 'Data berhasil dihapus');
    }
}