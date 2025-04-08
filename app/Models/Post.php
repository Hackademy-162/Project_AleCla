<?php

namespace App\Models;

use App\Models\Continent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title',
        'img',
        'description',
        'itinerary',
        'continent_id',
    ];

    public function continent() : BelongsTo
    {
        return $this->belongsTo(Continent::class);
    }
}
