<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'sub_judul',
        'judul_keterangan',
        'keterangan',
    ];
}
