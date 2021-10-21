<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Berkas extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';

    protected $fillable = [
        'name_lengkap',
        'nik',
        'nkk',
        'telepon',
        'umur',
        'pesan',
        'alamat',
        'email',
        'fotoUsaha',
        'fotoKK'
    ];
}
