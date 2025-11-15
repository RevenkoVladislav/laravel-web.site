<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    protected $table = 'courses';
    protected $guareded = [];

    public function schools() : BelongsToMany
    {
        return $this->belongsToMany(School::class);
    }
}
