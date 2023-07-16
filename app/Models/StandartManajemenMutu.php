<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandartManajemenMutu extends Model
{
    use HasFactory;

    protected $table = 'standart_manajemen_mutu';
    protected $fillable = ['judul', 'keterangan'];
}

