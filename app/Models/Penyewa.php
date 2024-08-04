<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $table = 'penyewa';
    protected $primaryKey = 'id_penyewa';

    protected $fillable = [
        'nama_penyewa',
        'alamat',
        'no_hp',
    ];

    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'id_penyewa');
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'id_penyewa');
    }
}
