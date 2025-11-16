<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class School extends Model
{
    protected $guarded = [];
    protected $table = 'schools';
    protected $hidden = ['pivot', 'created_at', 'updated_at'];
    protected $appends = ['schoolPrice'];

    public function courses() : BelongsToMany
    {
        return $this->belongsToMany(Course::class)->withPivot('price');
    }

    public function getSchoolPriceAttribute()
    {
        return $this->pivot?->price ?? null;
    }
}
