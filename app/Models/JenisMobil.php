<?php

namespace App\Models;

use App\Models\Relawan;
use App\Models\DocPermohonan;
use App\Models\FormPermohonan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisMobil extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'jenis_mobil'
    ];

    public function relawan()
    {
        return $this->hasMany(Relawan::class);
    }

    public function formpermohonan()
    {
        return $this->hasMany(FormPermohonan::class);
    }
    
    public function pendaftaran()
    {
        return $this->hasMany(FormPermohonan::class);
    }

    public function docpermohonan()
    {
        return $this->hasMany(DocPermohonan::class);
    }
}