<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'illustration',
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

    public function getIllustrationAttribute($value){
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
        static::updating(function ($Service) {
            if ($Service->isDirty('thumbnail')) {
                $oldThumbnail = $Service->getOriginal('thumbnail');
                if ($oldThumbnail && Storage::disk('public')->exists($oldThumbnail)) {
                    Storage::disk('public')->delete($oldThumbnail);
                }
            }

            if ($Service->isDirty('illustration')) {
                $oldIllustration = $Service->getOriginal('illustration');
                if ($oldIllustration && Storage::disk('public')->exists($oldIllustration)) {
                    Storage::disk('public')->delete($oldIllustration);
                }
            }
        });

    }

}
