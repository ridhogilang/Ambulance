<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'nama_organisasi',
        'nohp',
        'jenis_id',
        'alamat',
        'link_alamat',
        'nama_sopir',
        'kondisi',
        'image_in',
        'image_out'
    ];

    public function jenis()
    {
        return $this->belongsTo(JenisMobil::class);
    }

    public function getRouteKeyName()
    {
        return 'nama';
    }
}