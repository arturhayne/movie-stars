<?php

namespace Tests\Feature;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ActorControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexActors(): void
    {
        Actor::factory()
            ->hasAttached(Movie::factory()->state(['title' => 'Die Hard']))
            ->hasAttached(Movie::factory()->state(['title' => 'Pulp Fiction']))
            ->hasAttached(Movie::factory()->state(['title' => 'Hudson Hank']))
            ->create([
                'name' => 'Bruce Willis',
            ]);

        Actor::factory()
            ->create([
                'name' => 'Armando',
            ]);

        Actor::factory()
            ->hasAttached(Movie::factory()->state(['title' => 'Mother!']))
            ->hasAttached(Movie::factory()->state(['title' => 'X-Men']))
            ->hasAttached(Movie::factory()->state(['title' => 'Joy']))
            ->create([
                'name' => 'Jennifer Lawrence',
            ]);

        $response = $this->get(route('actors.index'));

        $response->assertStatus(200);

        $response->assertViewIs('actors');

        $response->assertSee('Bruce Willis');
        $response->assertSee('Jennifer Lawrence');
        $response->assertSee('Armando');

        $response->assertSee('Mother!');
        $response->assertSee('X-Men');
        $response->assertSee('Joy');

        $response->assertSee('Pulp Fiction');
        $response->assertSee('Hudson Hank');
        $response->assertSee('Die Hard');
    }

    public function testActorsCanBeFilteredByName()
    {
        Actor::factory()->create(['name' => 'Bruce Willis']);
        Actor::factory()->create(['name' => 'Jane Smith']);
        Actor::factory()->create(['name' => 'Jennifer Lawrence']);

        $response = $this->get(route('actors.index', ['name' => 'Bruce']));

        $response->assertStatus(200);

        $response->assertViewIs('actors');

        $response->assertSee('Bruce Willis');

        $response->assertDontSee('Jane Smith');
        $response->assertDontSee('Jennifer Lawrence');
    }
}
