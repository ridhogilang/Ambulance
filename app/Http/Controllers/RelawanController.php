<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use App\Models\Relawan;

class RelawanController extends Controller
{
    public function index()
    {    
        return view('relawan' , [
            "title" => "Relawan",
            // "relawan" => Relawan::with(['lokasi', 'jenis'])->paginate(10),
            "relawan" => Relawan::with(['lokasi', 'jenis'])->relawan(request(['search']))->paginate(7),
            "lokasi" => Lokasi::all()
        ]);
    }

    public function show($slug)
    {
        return view('post' , [ 
            "title" => "ID Relawan",
            "post" => Relawan::find($slug)
        ]);
    }

    public function lokasi(Lokasi $lokasi)
    {
        return view('lokasi', [
            "title" => $lokasi->kabupaten,
            "relawan" => $lokasi->relawan->load('lokasi','jenis'),
            "lokasi" => $lokasi->kabupaten
        ]);
    }
}