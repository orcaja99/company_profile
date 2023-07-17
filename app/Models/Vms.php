<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vms extends Model
{
    protected $table = 'vms';

    protected $fillable = [
        'visi',
        'misi',
        'strategi',
    ];
}

