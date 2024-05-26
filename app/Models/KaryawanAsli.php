<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class KaryawanAsli extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'karyawan_asli';
    protected $fillable = [
        'nama',
        'id',
    ];

    protected $hidden = [
        'id',
    ];
}
