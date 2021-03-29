<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIS', 'NAMA', 'Jns_kelamin', 'Temp_lahir', 'Tgl_lahir', 'Alamat', 'Asal_sekolah', 'Kelas', 'Jurusan'
    ];
}
