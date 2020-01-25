<?php

namespace App\Http\Controllers;

use App\Habitude;
use App\Http\Requests\HabitudeRequest;

class HabitudeController extends Controller
{
    public function all()
    {
        return response()->json(Habitude::all());
    }

    public function create(HabitudeRequest $request)
    {
        return response()->json(Habitude::create($request->toArray()));
    }

    public function update(HabitudeRequest $request)
    {
        return response()->json(Habitude::find($request->id)->update($request->toArray()));
    }

    public function delete(int $id)
    {
        return response()->json(Habitude::find($id)->delete());
    }
}
