<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class earthquake_report extends Model
{
    use HasFactory;

    protected $fillable = ['lokasi', 'deskripsi', 'kedalaman', 'magnitude', 'waktu_kejadian'];
}
