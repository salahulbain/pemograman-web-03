<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MahasiswaRequest;
use App\Models\Mahasiswas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswas::all();
        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        $data = [
            'npm'           => $request->npm,
            'nama'          => $request->nama,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat'        => $request->alamat,
            'nik'           => $request->nik,
            'no_hp'         => $request->no_hp
        ];

        Mahasiswas::create($data);

        return redirect()->route('mahasiswa.index')->with('success', 'data mahasiswa berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswas $mahasiswas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswas $mahasiswas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswas $mahasiswas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswas $mahasiswas)
    {
        //
    }
}
