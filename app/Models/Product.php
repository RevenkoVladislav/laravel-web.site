<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = [];

    public function getNameAttribute()
    {
        return $this->product_name;
    }

    public function productShops() : HasMany
    {
        return $this->hasMany(ProductShop::class);
    }
}
