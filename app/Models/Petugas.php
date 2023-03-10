<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    protected $primaryKey = 'id_petugas';
    
    protected $fillabel = [
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level',
    ];
}
