<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allpenerbit = Penerbit::all();
        return view('penerbit.index', compact('allpenerbit'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     // buat validasi

        $validatedData = $request->validate([
            'nama_penerbit' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan data penerbit
        Penerbit::create($validatedData);

        // redirect ke index
        return redirect()->route('penerbit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        return view('penerbit.show', compact('penerbit'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        // buat validasi
        $validatedData = $request->validate([
            'nama_penerbit'=> 'required|string|max:255',    
        ]);
        // Update data penerbit
        $penerbit->update($validatedData);

        // redirect ke index

        return redirect()->route('penerbit.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        // Hapus data penerbit
        $penerbit->delete();

        // redirect ke index
        return redirect()->route('penerbit.index');
    }
}
