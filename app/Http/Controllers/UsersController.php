<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
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
