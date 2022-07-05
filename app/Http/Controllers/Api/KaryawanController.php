<?php

namespace App\Http\Controllers\Api;

use App\Helpers\JsonFormatter;
use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Exception;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();

        if ($karyawan) {
            return JsonFormatter::JsonFormat(200, 'Success to Received Karyawan Data', $karyawan);
        } else {
            return JsonFormatter::JsonFormat(400, 'Failed to Received Karyawan Data');
        }
    }

    /**
     * Display a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $karyawan = Karyawan::where('id', $id)->get();

        if ($karyawan) {
            return JsonFormatter::JsonFormat(200, 'Success to Received Karyawan Detail', $karyawan);
        } else {
            return JsonFormatter::JsonFormat(400, 'Failed to Received Karyawan Detail');
        }
    }

    /**
     * Display a detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

            $request->validate([
                'nama' => 'required|string'
            ]);

            $karyawan = Karyawan::where('nama','LIKE', '%'.$request->nama.'%')->get();

            if ($karyawan) {
                return JsonFormatter::JsonFormat(200, 'Success to Find Karyawan', $karyawan);
            }
            else{
                return JsonFormatter::JsonFormat(400, 'Failed to Find Karyawan');
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string',
                'umur' => 'required',
                'perusahaan_id' => 'required'
            ]);

            $karyawan = Karyawan::create([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'perusahaan_id' => $request->perusahaan_id
            ]);

            $data = Karyawan::where('id', $karyawan->id)->get();
            if ($data) {
                return JsonFormatter::JsonFormat(200, 'Success to Create Karyawan', $data);
            }
        } catch (Exception $err) {
            return JsonFormatter::JsonFormat(400, 'Failed to Create Karyawan');
        }
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
        try {
            $request->validate([
                'nama' => 'required|string',
                'umur' => 'required',
                'perusahaan_id' => 'required'
            ]);

            $karyawan = Karyawan::where('id', $id)->update([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'perusahaan_id' => $request->perusahaan_id
            ]);

            $data = Karyawan::where('id', $id)->get();
            if ($karyawan) {
                return JsonFormatter::JsonFormat(200, 'Success to update Karyawan', $data);
            }
        } catch (Exception $err) {
            return JsonFormatter::JsonFormat(400, 'Failed to update Karyawan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Karyawan::where('id', $id)->get();
        $karyawan = Karyawan::where('id', $id)->delete();
        if ($karyawan) {
            return JsonFormatter::JsonFormat(200, 'Success to Delete Karyawan', $data);
        }else{
            return JsonFormatter::JsonFormat(400, 'Failed to Delete Karyawan');
        }
    }
}
