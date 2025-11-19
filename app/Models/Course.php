<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Course extends Model
{
    protected $table = 'courses';
    protected $guarded = [];
    protected $hidden = ['pivot', 'created_at', 'updated_at'];
    protected $appends = ['schoolPrice'];

    public function schools() : BelongsToMany
    {
        return $this->belongsToMany(School::class)->withPivot('price');
    }

    public function getSchoolPriceAttribute()
    {
        return $this->pivot?->price ?? null;
    }

    public function images() : MorphMany
    {
        return $this->MorphMany(Image::class, 'imageable');
    }
}
