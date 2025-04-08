<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Continent extends Model
{
    protected $fillable =[
        'title',
        'img',
    ];

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }

}