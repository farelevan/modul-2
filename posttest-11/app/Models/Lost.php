<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $table = 'losts';
    protected $fillable = [
        'Nama_Barang',
        'Lokasi',
        '_token',
    ];
}
