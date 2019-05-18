<?php

namespace App\Http\Controllers;

use App\Kecamatan;
use App\Kota;
use App\Kelurahan;

class KelurahansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahans = Kelurahan::all();
        return view('kelurahans.index', compact('kelurahans'));
    }

    public function create()
    {
        $kotas = Kota::all();
        return view('kelurahans.create', compact('kotas'));
    }

    public function store()
    {
        Kelurahan::create(request(['nama', 'kecamatan_id']));

        return redirect('/kelurahans');
    }

    public function edit(Kecamatan $kecamatan)
    {
        $kotas = Kota::all();
        return view('kelurahans.edit', compact(['kotas', 'kecamatan']));
    }

    public function update(Kecamatan $kecamatan)
    {
        $kecamatan->update(request(['nama', 'kota_id']));

        return redirect('/kecamatans');
    }

    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();

        return redirect('/kecamatans');
    }
}
