<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryForMessage extends Model
{
    use HasFactory;

    public $guarded = [];

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
