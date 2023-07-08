<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Relawan;
use App\Models\JenisMobil;
use Illuminate\Http\Request;

class DashboardRelawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dash', [
            'relawan' => Relawan::all(),
            'title' => 'Relawan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.relawan.input', [
            'title' => 'Input',
            'jenis' => JenisMobil::all(),
            'jenis' => Lokasi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lokasi_id' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
            'link_alamat' => 'required',
            'jenis_id' => 'required',
            'vertifikasi' => 'required',
            'via_vertifikasi' => 'required',
            'plat_nomor' => 'required',
            'kondisi_mobil' => 'required',
            'foto_dalam' => 'required',
            'foto_luar' => 'required'
        ]);

        // dd($validatedData);

        Relawan::create($validatedData);
        return redirect('/dashrelawan')->with('success', 'Data Relawan Baru Sudah Berhasil di Tambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $data = Relawan::where('name', $name)->get()->first();
        // dd($data);
        return view('admin.relawan.viewrelawan', [
            'post' => $data,
            'lokasi' => Lokasi::all(),
            'title' => 'Relawan'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $data = Relawan::where('name', $name)->get()->first();
        
        return view('admin.relawan.edit', [
            'post' => $data,
            'lokasi' => Lokasi::all(),
            'title' => 'Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function update( $id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lokasi_id' => 'required',
            'nomor' => 'required',
            'alamat' => 'max:255',
            'link_alamat' => 'max:255',
            'jenis_id' => 'required',
            'vertifikasi' => 'required',
            'via_vertifikasi' => 'required',
            'plat_nomor' => 'required',
            'kondisi_mobil' => 'required',
            'foto_dalam' => 'required',
            'foto_luar' => 'required'
        ]);

        // dd($validatedData);

        Relawan::whereId($id)->update($validatedData);
        return redirect('/dashrelawan')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relawan  $relawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Relawan $relawan)
    {
        Relawan::destroy($id);
        return redirect('/dashrelawan')->with('success', 'Relawan sudah berhasil dihapus');
    }
}