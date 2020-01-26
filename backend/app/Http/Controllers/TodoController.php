<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;

class TodoController extends Controller
{
    public function get(string $date)
    {
        return response()->json(Todo::whereDate('=', $date));
    }

    public function create(TodoRequest $request)
    {
        return response()->json(Todo::create($request->toArray()));
    }

    public function delete(int $id)
    {
        return response()->json(Todo::find($id)->delete());
    }
}
