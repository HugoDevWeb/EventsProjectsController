<?php

namespace App\Models;

use App\Models\Traits\Sluggable;
use App\Models\Traits\SlugRoutable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use SlugRoutable, Sluggable;
    protected $fillable = ['title', 'description', 'slug'];
}
