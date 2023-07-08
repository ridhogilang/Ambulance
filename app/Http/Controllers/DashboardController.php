<?php

namespace App\Http\Controllers;

use App\Models\FormPermohonan;
use App\Models\Pendaftaran;
use App\Models\Relawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ambulance = FormPermohonan::where('jenis_id', '1')->get();
        $jenazah = FormPermohonan::where('jenis_id', '2')->get();
                
        return view('admin.dashboard.dashboard', [
            'title' => 'Dashboard',
            'relawan' => Relawan::all(),
            'jumrelawan' => Relawan::count(),
            'jumambulance' => $ambulance->count(),
            'jumjenazah' => $jenazah->count(),
            'jumdaftar' => Pendaftaran::count()
        ]);
    }

    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profile'
        ]);
    }
    
    public function calender()
    {
        return view('admin.dashboard.calender', [
            'title' => 'Calender'
        ]);
    }
}