<?php

namespace App\Http\Controllers;

use App\Kota;

class KotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kotas = Kota::all();
        return view('kotas.index', compact('kotas'));
    }

    public function create()
    {
        return view('kotas.create');
    }

    public function store()
    {
        Kota::create(request(['nama']));

        return redirect('/kotas');
    }

    public function edit(Kota $kota)
    {
        return view('kotas.edit', compact('kota'));
    }

    public function update(Kota $kota)
    {
        $kota->update(request(['nama']));

        return redirect('/kotas');
    }

    public function destroy(Kota $kota)
    {
        $kota->delete();

        return redirect('/kotas');
    }
}
