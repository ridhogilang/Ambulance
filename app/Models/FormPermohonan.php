<?php

namespace App\Models;

use App\Models\JenisMobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormPermohonan extends Model
{
    use HasFactory;

 /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'image',
        'nohp',
        'jenis_id',
        'namapasien',
        'almarhum',
        'alamat',
        'rtrw',
        'kecamatan',
        'desa',
        'umur',
        'infkesius',
        'penyakit',
        'kondisi',
        'status',
        'prokes',
        'makam',
        'lokasi',
        'tujuan',
        'antar',
        'tanggal',
        'pukul',
        'lain'
    ];

    public function jenis()
    {
        return $this->belongsTo(JenisMobil::class);
    }
    
    // public function getRouteKeyName()
    // {
    //     return 'nama';
    // }
}