<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StarWarsCharacterResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'height' => $this->height,
            'mass' => $this->mass,
            'hair_color' => $this->hairColor,
            'skin_color' => $this->skinColor,
            'eye_color' => $this->eyeColor,
            'birth_year' => $this->birthYear,
            'gender' => $this->gender,
            'homeworld' => $this->homeworld,
            'films' => $this->films,
            'species' => $this->species,
            'vehicles' => $this->vehicles,
            'starships' => $this->starships,
            'created' => $this->created,
            'edited' => $this->edited,
            'url' => $this->url,
        ];
    }
}


