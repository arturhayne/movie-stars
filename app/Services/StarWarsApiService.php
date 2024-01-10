<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\StarWarsCharacter;

class StarWarsApiService
{
    public function searchPeople($searchTerm)
    {
        $response = Http::get(config('swapi.url') . "?search={$searchTerm}");

        return collect($response['results'])->map(function ($characterData) {
            return new StarWarsCharacter($characterData);
        });
    }
}
