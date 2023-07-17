<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SM_Mutu extends Model
{
    protected $table = 'smt';
    protected $fillable = ['judul', 'sub_judul', 'keterangan'];
}
