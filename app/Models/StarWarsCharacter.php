<?php

namespace App\Models;

class StarWarsCharacter
{
    public $name;
    public $height;
    public $mass;
    public $hairColor;
    public $skinColor;
    public $eyeColor;
    public $birthYear;
    public $gender;
    public $homeworld;
    public $films;
    public $species;
    public $vehicles;
    public $starships;
    public $created;
    public $edited;
    public $url;

    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? null;
        $this->height = $data['height'] ?? null;
        $this->mass = $data['mass'] ?? null;
        $this->hairColor = $data['hair_color'] ?? null;
        $this->skinColor = $data['skin_color'] ?? null;
        $this->eyeColor = $data['eye_color'] ?? null;
        $this->birthYear = $data['birth_year'] ?? null;
        $this->gender = $data['gender'] ?? null;
        $this->homeworld = $data['homeworld'] ?? null;
        $this->films = $data['films'] ?? [];
        $this->species = $data['species'] ?? [];
        $this->vehicles = $data['vehicles'] ?? [];
        $this->starships = $data['starships'] ?? [];
        $this->created = $data['created'] ?? null;
        $this->edited = $data['edited'] ?? null;
        $this->url = $data['url'] ?? null;
    }
}
