<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMT extends Model
{
    protected $table = 'smt';
    protected $fillable = ['judul' , 'keterangan'];
}
