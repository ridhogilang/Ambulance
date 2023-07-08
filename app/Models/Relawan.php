<?php

namespace App\Models;

use App\Models\Lokasi;
use App\Models\JenisMobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relawan extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'lokasi_id',
        'nomor',
        'alamat',
        'link_alamat',
        'jenis_id',
        'vertifikasi',
        'via_vertifikasi',
        'plat_nomor',
        'kondisi_mobil',
        'foto_dalam',
        'foto_luar'
    ];

    public function scopeRelawan($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('alamat', 'like', '%' . $search . '%');
        });
    }
    
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }

    public function jenis()
    {
        return $this->belongsTo(JenisMobil::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}