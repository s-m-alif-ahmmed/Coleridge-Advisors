<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'title',
        'sub_title',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
