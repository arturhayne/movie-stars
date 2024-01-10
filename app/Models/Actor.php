<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'birthdate',
        'country',
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class)->withTimestamps();
    }

    public function scopeSearchByName($query, $name)
    {
        return $query->where('name', 'like', "%$name%");
    }
}
