<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::all();
        return view('perusahaan.index')->with(compact(['perusahaan']));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $perusahaan = Perusahaan::where('id',$id)->first();
        $perusahaans = Perusahaan::all();
        $karyawan = Karyawan::where('perusahaan_id', $id)->get();
        return view('perusahaan.detail')->with(compact(['perusahaans','perusahaan', 'karyawan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan.create');
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
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'aktif' => 'required'
        ]);

        $aktif = ($request->aktif == 'Aktif') ? true : false;

        Perusahaan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'aktif' => $aktif
        ]);

        return redirect('/perusahaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'aktif' => 'required'
        ]);

        $aktif = ($request->aktif == 'Aktif') ? true : false;

        Perusahaan::where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'aktif' => $aktif
        ]);

        return redirect('/perusahaan/detail/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perusahaan::where('id',$id)->delete();

        return redirect('/perusahaan');
    }
}
