<?php

namespace App\Http\Controllers;

use App\Models\JenisMobil;
use App\Models\Pendaftaran;
// use Clockwork\Storage\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pendaftaran.pendaftaran', [
            'pendaftaran' => Pendaftaran::all(),
            'title' => 'Pendaftaran'
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        // return dd(Pendaftaran::all());
        return view('admin.pendaftaran.viewpendaftaran', [
            'post' => $pendaftaran,
            'jenis' => JenisMobil::all(),
            'title' => 'Detail Pendaftaran'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran.edit', [
            'post' => $pendaftaran,
            'title' => 'Edit',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nama_organisasi' => 'required',
            'nohp' => 'required',
            'jenis_id' => 'required',
            'alamat' => 'required',
            'link_alamat' => '',
            'nama_sopir' => 'required',
            'kondisi' => 'required',
            'image_in' => 'required',
            'image_out' => 'required'
        ]);

        Pendaftaran::whereId($pendaftaran->id)->update($validatedData);
        return redirect('pendaftaran')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        if($pendaftaran->image_in) {
            Storage::delete($pendaftaran->image_in);
        }

        if($pendaftaran->image_out) {
            Storage::delete($pendaftaran->image_out);
        }
        Pendaftaran::destroy($pendaftaran->id);
        return redirect('/pendaftaran')->with('success', 'Relawan sudah berhasil dihapus');
    }
}