<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition(): array
    {
        return [
            'uuid' => (string) Str::uuid(),
            'title' => $this->faker->sentence,
            'release_date' => $this->faker->date,
            'genre' => $this->faker->word,
        ];
    }
}
