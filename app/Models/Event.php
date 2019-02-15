<?php

namespace App\Models;

use App\Models\Traits\SlugRoutable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use SlugRoutable;
    protected $fillable = ['title', 'description', 'slug'];

    public static function boot(){

        parent::boot();
        static::creating(function ($events) {
            $events->slug = str_slug($events->title);
        });

    }
}
