<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActorFilterRequest;
use App\Models\Actor;
use App\Resources\ActorResource;

class ActorController extends Controller
{
    public function index(ActorFilterRequest $request)
    {
        $actors = ActorResource::collection(
            Actor::with('movies')
                ->when($request->input('name'), fn ($query, $filter) => $query->searchByName($filter))
                ->get()
        );

        return view('actors', compact('actors'));
    }
}
