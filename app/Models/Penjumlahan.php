<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjumlahan extends Model
{
    use HasFactory;
    protected $table = 'penjumlahans';
    // protected $primaryKey = 'id_kerusakan';
    protected $fillable = [
        'id', 'tgl', 'sisa_gelas', 'jumlah_box'
    ];
}
