<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritap extends Model
{
    protected $fillable = ['judul', 'gambar', 'tanggal', 'keterangan'];
}
