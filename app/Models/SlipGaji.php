<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlipGaji extends Model
{
    protected $fillable = [
        'tahun', 'bulan', 'slip_gaji'
    ];
}
