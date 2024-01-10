<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    public function run(): void
    {
        Actor::factory()
            ->hasAttached(Movie::factory()->count(3))
            ->count(5)
            ->create();
    }
}
