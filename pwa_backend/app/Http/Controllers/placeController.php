<?php

namespace App\Http\Controllers;

use App\Http\Requests\placeRequest;
use App\place;

class placeController extends Controller
{
    public function index()
    {
        $places = place::latest()->get();

        return response(['data' => $places ], 200);
    }

    public function store(placeRequest $request)
    {
        $place = place::create($request->all());

        return response(['data' => $place ], 201);

    }

    public function show($id)
    {
        $place = place::findOrFail($id);

        return response(['data', $place ], 200);
    }

    public function update(placeRequest $request, $id)
    {
        $place = place::findOrFail($id);
        $place->update($request->all());

        return response(['data' => $place ], 200);
    }

    public function destroy($id)
    {
        place::destroy($id);

        return response(['data' => null ], 204);
    }
}
