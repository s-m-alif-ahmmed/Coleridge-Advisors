<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'video_title',
        'thumbnail',
        'video',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getThumbnailAttribute($value){
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }
        if (request()->is('api/*') && !empty($value)) {
            return url(Storage::url($value));
        }
        return $value;
    }

    public function getVideoAttribute($value){
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
        static::updating(function ($aboutUs) {
            if ($aboutUs->isDirty('thumbnail')) {
                $oldThumbnail = $aboutUs->getOriginal('thumbnail');
                if ($oldThumbnail && Storage::disk('public')->exists($oldThumbnail)) {
                    Storage::disk('public')->delete($oldThumbnail);
                }
            }
            if ($aboutUs->isDirty('video')) {
                $oldVideo = $aboutUs->getOriginal('video');
                if ($oldVideo && Storage::disk('public')->exists($oldVideo)) {
                    Storage::disk('public')->delete($oldVideo);
                }
            }
        });

    }

}
