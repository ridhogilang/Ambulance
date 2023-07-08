<?php

namespace App\Http\Controllers;
use App\Models\FormPermohonan;
use App\Models\JenisMobil;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index()
    {
        return view('form', [
            'title' => 'Form',
            'jenis' => JenisMobil::all()
        ]);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'image' => 'required|image|file|max:1024',
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

        $validatedData['image'] = $request->file('image')->store('foto-ktp');

        FormPermohonan::create($validatedData);

        return redirect('/form')->with('success', 'Terima kasih atas pemesanan layanan mobil My Ambulanca.<br>Petugas kami akan segera menghubungi anda.<br>Pastikan WA anda aktif.<br>Jika dalam 15 menit tidak menerima notifikasi dari kami, hubungi call center kami');
    }
}