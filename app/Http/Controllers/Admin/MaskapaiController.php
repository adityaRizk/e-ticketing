<?php

namespace App\Http\Controllers\Admin;

use App\Models\Maskapai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaskapaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maskapai = Maskapai::all();
        return view('admin.maskapai.index', compact('maskapai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.maskapai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            'logo_maskapai' => ['required'],
            'nama_maskapai' => ['required'],
            'kapasitas' => ['required']
        ]);

        $file = $credential['logo_maskapai'];
        $credential['logo_maskapai'] = $file->getClientOriginalName();
        $file->move('images', $file->getClientOriginalName());

        Maskapai::create($credential);

        return redirect('/admin/maskapai')->with('success', 'Data maskapai berhasil ditambahkan');
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
        $maskapai = Maskapai::find($id);
        return view('admin.maskapai.edit', compact('maskapai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            'logo_maskapai' => ['nullable'],
            'nama_maskapai' => ['required'],
            'kapasitas' => ['required']
        ]);

        if($request->file() != null){

            $file = $credential['logo_maskapai'];
            $credential['logo_maskapai'] = $file->getClientOriginalName();
            $file->move('images', $file->getClientOriginalName());
        }

        Maskapai::find($id)->update($credential);

        return redirect('/admin/maskapai')->with('success', 'Data maskapai berhasil ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Maskapai::find($id)->delete();
        return redirect('/admin/maskapai')->with('success', 'Data maskapai berhasil dihapus');
    }
}
