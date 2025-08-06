<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPlaceSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function placeSliders()
    {
        return $this->hasMany(PlaceSlider::class);
    }

}
