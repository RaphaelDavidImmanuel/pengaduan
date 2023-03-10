<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    protected $table = 'masyarakat';

    protected $hidden = [ 
        'password', 'remember_token', 
    ];

    protected $primarykey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
    ];
}
