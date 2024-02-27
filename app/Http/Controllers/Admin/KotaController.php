<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KotaController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kota = Kota::all();
        return view('admin.kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            'nama_kota' => ['required', 'unique:kota'],
        ]);

        Kota::create($credential);

        return redirect('/admin/kota')->with('success', 'Data kota berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kota = Kota::find($id);
        return view('admin.kota.edit', compact('kota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            'nama_kota' => 'required|unique:kota,nama_kota,' . $id,
        ]);

        $kota = Kota::find($id);
        $kota->update($request->all());
        return redirect('/admin/kota')->with('success', 'Data kota berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kota = Kota::find($id);
        $kota->delete();
        return redirect('/admin/kota')->with('success', 'Data kota berhasil dihapus');
    }
}
