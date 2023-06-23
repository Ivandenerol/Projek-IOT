<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage_reports extends Model
{
    use HasFactory;
    protected $table = 'damage_reports';
    protected $fillable = [
        'id', 'class_name', 'box', 'date_time'
    ];
}
