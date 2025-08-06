<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PlaceSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_place_slider_id',
        'title',
        'sub_title',
        'image',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getImageAttribute($value){
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }
        if (request()->is('api/*') && !empty($value)) {
            return url(Storage::url($value));
        }
        return $value;
    }

    protected static function booted()
    {
        static::updating(function ($placeSlider) {
            if ($placeSlider->isDirty('image')) {
                $oldImage = $placeSlider->getOriginal('image');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

    }

    public function mainPlaceSlider()
    {
        return $this->belongsTo(MainPlaceSlider::class);
    }

}
