<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    use HasFactory;

    protected $table = 'kwitansi';
    protected $primaryKey = 'id_kwitansi';

    protected $fillable = [
        'tgl_transaksi',
    ];

    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'id_kwitansi');
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'id_kwitansi');
    }
}
