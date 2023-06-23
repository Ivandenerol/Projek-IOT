<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input_box extends Model
{
    use HasFactory;
    protected $table = 'input_boxes';
    // protected $primaryKey = 'id_box';
    protected $fillable = [
        'id', 'tanggal', 'jumlah_box'
    ];
}
