<?php

namespace App\Models;

use App\Casts\Sample;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $casts = [
      'keywords' => Sample::class,
    ];

    protected $table = 'messages';
    protected $guarded = [];

    public function category() : BelongsTo
    {
        return $this->belongsTo(CategoryForMessage::class, 'category_for_message_id', 'id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
