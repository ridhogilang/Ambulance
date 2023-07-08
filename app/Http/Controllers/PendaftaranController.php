<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;
use App\Models\JenisMobil;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('formrelawan', [
            'title' => 'Form',
            'jenis' => JenisMobil::all()
        ]);
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'nama_organisasi' => 'required',
            'nohp' => 'required',
            'jenis_id' => 'required',
            'alamat' => 'required',
            'link_alamat' => 'required',
            'nama_sopir' => 'required',
            'kondisi' => 'required',
            'image_in' => 'required|image|file|max:1024',
            'image_out' => 'required|image|file|max:1024'
        ]);

        $validatedData['image_in'] = $request->file('image_in')->store('mobil-dalam');

        $validatedData['image_out'] = $request->file('image_out')->store('mobil-luar');

        Pendaftaran::create($validatedData);

        return redirect('/formrelawan')->with('success', 'Terima kasih sudah mendaftarkan diri sebagai relawan di tempat kami.');
        
    }
}