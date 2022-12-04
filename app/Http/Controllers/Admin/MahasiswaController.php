<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.mahasiswa.index');
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
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'digits:16'
        ]);
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
