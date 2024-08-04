<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'no_pol';
    public $incrementing = false;

    protected $fillable = [
        'no_pol',
        'no_mesin',
        'jenis_mobil',
        'nama_mobil',
        'merek',
        'kapasitas',
    ];

    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'no_pol');
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'no_pol');
    }
}
