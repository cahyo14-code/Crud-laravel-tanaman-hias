<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TanamanHias extends Model
{
    protected $table = 'tanaman_hias';
protected $primaryKey = 'id_tanaman';

protected $fillable = [
    'nama_tanaman',
    'jenis_tanaman',
    'harga',
    'stok',
    'ukuran',
    'deskripsi',
    'foto',
];
}
