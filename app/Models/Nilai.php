<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'poin_id',
        'semester',
        'awal_ajaran',
        'akhir_ajaran',
        'nilai',
    ];
}