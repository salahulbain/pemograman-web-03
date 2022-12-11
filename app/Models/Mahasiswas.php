<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'npm', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'nik', 'no_hp'
    ];
}
