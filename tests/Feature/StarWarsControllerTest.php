<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class StarWarsControllerTest extends TestCase
{
    public function testStarWarsView()
    {
        Http::fake([
            config('swapi.url') => Http::response(['results' => [
                ['name' => 'Luke Skywalker'],
            ],
            ], 200),
        ]);

        $response = $this->get(route('star-wars.index', ['search' => 'Luke']));

        $response->assertStatus(200);

        $response->assertSee('Luke Skywalker');
    }
}
