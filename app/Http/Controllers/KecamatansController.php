<?php

namespace App\Http\Controllers;

use App\Kecamatan;
use App\Kota;

class KecamatansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatans = Kecamatan::all();
        return view('kecamatans.index', compact('kecamatans'));
    }

    public function create()
    {
        $kotas = Kota::all();
        return view('kecamatans.create', compact('kotas'));
    }

    public function store()
    {
        Kecamatan::create(request(['nama', 'kota_id']));

        return redirect('/kecamatans');
    }

    public function edit(Kecamatan $kecamatan)
    {
        $kotas = Kota::all();
        return view('kecamatans.edit', compact(['kotas', 'kecamatan']));
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
