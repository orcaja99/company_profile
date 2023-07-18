<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DSB extends Model
{
    protected $table = 'dsb';
    protected $fillable = ['judul' , 'keterangan'];
}
