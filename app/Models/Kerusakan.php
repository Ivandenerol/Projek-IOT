<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kerusakan extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $table = 'kerusakans';
    // protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'tgl_kerusakan', 'box_ke', 'lincup_miring', 'bocor_jarum', 'pecah_koin', 'cup_belah', 'cup_penyok',
        'cup_tidak_rata'
    ];
}
