<?php

namespace App\Http\Controllers\Penumpang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $keranjang = $user->keranjang()->get();

        return view('penumpang.tiket.keranjang', compact('keranjang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah(string $id)
    {
        $user = Auth::user();

        $qty = $user->keranjang()->find($id)->pivot->qty + 1;

        $user->keranjang()->updateExistingPivot($id, ['qty' => $qty]);

        return redirect('/penumpang/keranjang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function kurang(string $id)
    {
        $user = Auth::user();

        $qty = $user->keranjang()->find($id)->pivot->qty - 1;

        if($qty >= 1){
            $user->keranjang()->updateExistingPivot($id, ['qty' => $qty]);
        }

        return redirect('/penumpang/keranjang');
    }

    /**
     * Display the specified resource.
     */
    public function hapus(string $id)
    {
        $user = Auth::user();

        $qty = $user->keranjang()->detach($id);

        return redirect('/penumpang/keranjang');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function store(string $id)
    {

        $user = Auth::user();
        $user->keranjang()->syncWithoutDetaching([$id,['qty' => 1]]);

        return redirect('/penumpang/keranjang');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
