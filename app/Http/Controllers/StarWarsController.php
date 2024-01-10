<?php

namespace App\Http\Controllers;

use App\Http\Requests\StarWarsSearchRequest;
use App\Http\Resources\StarWarsCharacterResource;
use App\Services\StarWarsApiService;

class StarWarsController extends Controller
{
    protected $starWarsApiService;

    public function __construct(StarWarsApiService $starWarsApiService)
    {
        $this->starWarsApiService = $starWarsApiService;
    }

    public function index(StarWarsSearchRequest $request)
    {
        $characters = StarWarsCharacterResource::collection(
            $this->starWarsApiService->searchPeople($request->input('search'))
        );

        return view('star-wars.index', compact('characters'));
    }
}
