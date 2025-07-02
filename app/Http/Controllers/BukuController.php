<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbuku = Buku::all();
        return view('buku.index', compact('allbuku'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penerbit = \App\Models\Penerbit::all();
        $kategori = \App\Models\Kategori::all();
        return view('buku.create', compact('penerbit', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     // buat validasi

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'pengarang' => 'required|max:100',
            'tahun_terbit' => 'required|integer:4',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
        ]);

        // Simpan data buku
        Buku::create($validatedData);

        // redirect ke index
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $penerbit = \App\Models\Penerbit::all();
        $kategori = \App\Models\Kategori::all();
        return view('buku.edit', compact('buku', 'penerbit', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, Buku $buku)
{
    $validatedData = $request->validate([
        'judul' => 'required|max:255',
        'pengarang' => 'required|max:100',
        'tahun_terbit' => 'required|integer',
        'kategori_id' => 'required',
        'penerbit_id' => 'required',
    ]);

    $buku->update($validatedData);

    return redirect()->route('buku.index')->with('success', 'Buku berhasil diupdate!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        // Hapus data buku
        $buku->delete();

        // redirect ke index
        return redirect()->route('buku.index');
    }
}
