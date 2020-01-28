<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Services\Todo\Get;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function get(Request $request, Get $service)
    {
        return response()->json($service->behave($request));
    }

    public function bind(TodoRequest $request)
    {
        return response()->json(Todo::create($request->toArray()));
    }

    public function unbind(TodoRequest $request)
    {
        return response()->json(Todo::where($request->toArray())->delete());
    }
}
