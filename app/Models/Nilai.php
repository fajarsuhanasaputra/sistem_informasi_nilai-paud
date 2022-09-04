<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'semester',
        'catatan',
        'moral_agama',
        'fisik',
        'bahasa',
        'kognitif',
        'sosial',
        'seni',
        'muatan_lokal',
    ];
}
