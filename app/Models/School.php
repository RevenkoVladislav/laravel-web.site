<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class School extends Model
{
    protected $guarded = [];
    protected $table = 'schools';

    public function courses() : BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
