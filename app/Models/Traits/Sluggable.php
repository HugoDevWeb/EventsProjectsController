<?php

namespace App\Models\Traits;

trait Sluggable
{
    public static function boot(){

        parent::boot();
        static::creating(function ($events) {
            $events->slug = str_slug($events->title);
        });

    }
}