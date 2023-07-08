<?php

namespace App\Http\Controllers;

use App\Models\FormPermohonan;
use App\Models\JenisMobil;
// use Clockwork\Storage\Storage;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Storage;

class DashboardPermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ambulance.permohonan', [
            'ambulance' => FormPermohonan::where('jenis_id', '1')->get(),
            'jenazah' => FormPermohonan::where('jenis_id', '2')->get(),
            'title' => 'Permohonan'
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
     * @param  \App\Models\FormPermohonan  $formPermohonan
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        // return dd(FormPermohonan::where('jenis_id', '1')->get());
        $data=FormPermohonan::where('nama', $nama)->get()->first();
        // dd($data->toArray());
        return view('admin.ambulance.edit', [
            'post' => $data,
            'title' => 'Permohonan'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormPermohonan  $formPermohonan
     * @return \Illuminate\Http\Response
     */
    public function edit($nama)
    {
        $data=FormPermohonan::where('nama', $nama)->get()->first();

        return view('admin.ambulance.pindah', [
            'post' => $data,
            'title' => 'Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormPermohonan  $formPermohonan
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {   
        // $data=FormPermohonan::where('nama', $nama)->get(); 
        FormPermohonan::all();
        
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'image' => 'required',
            'nohp' => 'required',
            'jenis_id' => 'required',
            'namapasien' => 'max:255',
            'almarhum' => 'max:255',
            'alamat' => 'required',
            'rtrw' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'umur' => 'max:255',
            'infeksius' => 'max:255',
            'penyakit' => 'max:255',
            'kondisi' => 'max:255',
            'status' => 'max:255',
            'prokes' => 'max:255',
            'makam' => 'max:255',
            'lokasi' => 'max:255',
            'tujuan' => 'max:255',
            'antar' => 'max:255',
            'tanggal' => 'max:255',
            'pukul' => 'max:255',
            'lain' => 'max:255'
        ]);

        $data = FormPermohonan::where('id', $id)->first()->update($validatedData);
        if ($data) {
            return redirect('/permohonan')->with('success', 'Data has been updated!');
        }

        
        // return redirect('/permohonan')->with('success', 'Data has been updated!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormPermohonan  $formPermohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= FormPermohonan::where('id', $id)->get()->first();
        
        // if($data->image) {
        //     Storage::delete($data->image);
        // }
        
        FormPermohonan::destroy($data->id);
        return redirect('/permohonan')->with('success', 'Relawan sudah berhasil dihapus');
    }

}