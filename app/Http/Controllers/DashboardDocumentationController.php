<?php

namespace App\Http\Controllers;

use App\Models\DocPermohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardDocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dokumentasi.dokumentasi', [
            'ambulance' => DocPermohonan::where('jenis_id', '1')->get(),
            'jenazah' => DocPermohonan::where('jenis_id', '2')->get(),
            'title' => 'Dokumentasi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dokumentasi.input', [
            'title' => 'Input'
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
        
        // $validatedData['image'] = $request->file('image')->store('docfoto-ktp');
        
        DocPermohonan::create($validatedData);
        return redirect('dokumentasi')->with('success', 'Dokumentasi Relawan Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DocPermohonan  $docPermohonan
     * @return \Illuminate\Http\Response
     */
    public function show($nama, DocPermohonan $docPermohonan)
    {
        $data = DocPermohonan::where('nama', $nama)->get()->first();

        return view('admin.dokumentasi.viewdokumentasi', [
            'post' => $data,
            'title' => 'View'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocPermohonan  $docPermohonan
     * @return \Illuminate\Http\Response
     */
    public function edit($nama, DocPermohonan $docPermohonan)
    {
        $data=DocPermohonan::where('nama', $nama)->get()->first();
        
        return view('admin.dokumentasi.edit', [
            'post' => $data,
            'title' => 'Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocPermohonan  $docPermohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocPermohonan $docPermohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocPermohonan  $docPermohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, DocPermohonan $docPermohonan)
    {
        $data = DocPermohonan::where('id', $id)->get()->first();

        if($data->image) {
            Storage::delete($data->image);
        }

        DocPermohonan::destroy($data->id);
        return redirect('/dokumentasi')->with('success', 'Relawan sudah berhasil dihapus');
    }
}