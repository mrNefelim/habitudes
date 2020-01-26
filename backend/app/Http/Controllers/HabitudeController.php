<?php

namespace App\Http\Controllers;

use App\Habitude;
use App\Http\Requests\HabitudeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HabitudeController extends Controller
{
    public function all(Request $request)
    {
        return response()->json(Habitude::whereUserId($request->user()->id)->get());
    }

    public function create(HabitudeRequest $request)
    {
        $habitude = $request->toArray();
        $habitude['user_id'] = $request->user()->id;

        return response()->json(Habitude::create($habitude));
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
