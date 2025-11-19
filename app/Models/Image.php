<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    protected $guarded = [];
    protected $visible = ['id', 'url'];

    public function imageable() : MorphTo
    {
        return $this->morphTo();
    }
}
