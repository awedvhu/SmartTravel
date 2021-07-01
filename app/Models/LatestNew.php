<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestNew extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'information',
        'date',
        'photo_path'
    ];
}
