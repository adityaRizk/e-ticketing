<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kota;
use App\Models\Rute;
use App\Models\Maskapai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rute = Rute::all();
        return view('admin.rute.index', compact('rute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kota = Kota::all();
        // dd($kota);
        $maskapai = Maskapai::all();
        return view('admin.rute.create', compact('maskapai', 'kota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            'maskapai_id' => ['required'],
            'tanggal_pergi' => ['required'],
            'rute_asal' => ['required'],
            'rute_tujuan' => ['required'],
        ]);
        // dd($credential);
        Rute::create($credential);

        return redirect('/admin/rute')->with('success', 'Data rute berhasil ditambahkan');
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
        $kota = Kota::all();
        $maskapai = Maskapai::all();
        $rute = Rute::find($id);
        return view('admin.rute.edit', compact('rute', 'kota', 'maskapai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            'maskapai_id' => ['required'],
            'tanggal_pergi' => ['required'],
            'rute_asal' => ['required'],
            'rute_tujuan' => ['required'],
        ]);
        $rute = Rute::find($id);
        $rute->update($credential);
        return redirect('/admin/rute')->with('success', 'Data rute berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rute = Rute::find($id);
        $rute->delete();
        return redirect('/admin/rute')->with('success', 'Data rute berhasil dihapus');
    }
}
