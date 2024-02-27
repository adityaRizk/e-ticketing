<?php

namespace App\Http\Controllers\Petugas;

use App\Models\Rute;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        // dd($jadwal);
        return view('petugas.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rute = Rute::all();
        return view('petugas.jadwal.create', compact('rute'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            'rute_id' => ['required'],
            'waktu_berangkat' => ['required'],
            'waktu_tiba' => ['required'],
            'harga' => ['required'],
        ]);

        Jadwal::create($credential);

        return redirect('/petugas/jadwal')->with('success', 'Data jadwal berhasil ditambahkan');
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
        $jadwal = Jadwal::find($id);
        $rute = Rute::all();
        return view('petugas.jadwal.edit', compact('rute','jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            'rute_id' => ['required'],
            'waktu_berangkat' => ['required'],
            'waktu_tiba' => ['required'],
            'harga' => ['required'],
        ]);

        Jadwal::find($id)->update($credential);

        return redirect('/petugas/jadwal')->with('success', 'Data jadwal berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/petugas/jadwal')->with('success', 'Data jadwal berhasil dihapus');
    }
}
