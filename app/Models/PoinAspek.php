<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoinAspek extends Model
{
    use HasFactory;
    protected $table = 'poin_aspek';
    protected $fillable = [
        'nama_poin',
        'aspek_id',
    ];
}