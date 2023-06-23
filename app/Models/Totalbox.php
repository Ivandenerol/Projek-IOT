<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Totalbox extends Model
{
    use HasFactory;
    protected $table = 'totalboxes';
    // protected $primaryKey = 'id_box';
    protected $fillable = [
        'id', 'tgl_total', 'ttl_box'
    ];
}
