<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'title',
        'release_date',
        'genre',
    ];

    public function actor()
    {
        return $this->belongsToMany(Actor::class)->withTimestamps();
    }
}
