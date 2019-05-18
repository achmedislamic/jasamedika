<?php

namespace App\Http\Controllers;

use App\Pasien;

class PasiensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasiens.index', compact('pasiens'));
    }

    public function create()
    {
        $kotas = \App\Kota::all();
        return view('pasiens.create', compact('kotas'));
    }

    public function store()
    {
        Pasien::create(request(['nama', 'alamat', 'telp', 'rt', 'rw', 'kelurahan_id', 'tanggal_lahir', 'jenis_kelamin']));

        return redirect('/pasiens');
    }

    public function edit(Pasien $pasien)
    {
        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Pasien $pasien)
    {
        $pasien->update(request(['nama', 'alamat', 'telp', 'rt', 'rw', 'tanggal_lahir', 'jenis_kelamin']));

        return redirect('/pasiens');
    }

    public function destroy(Kota $kota)
    {
        $kota->delete();

        return redirect('/kotas');
    }
}
