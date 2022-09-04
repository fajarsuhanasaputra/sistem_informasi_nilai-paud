<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'nisn',
        'nama_siswa',
        'jenis_kelamin',
        'telepon',
        'alamat',
        'nama_wali',
        'tgl_lahir',
        'tempat_lahir',
        'angkatan',
        'poto',
    ];
}
