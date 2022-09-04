<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'nip',
        'nama_guru',
        'jenis_kelamin',
        'telepon',
        'alamat',
    ];
}
