<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterFormRequest;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @param RegisterFormRequest $request
     * @return JsonResponse
     */
    public function register(RegisterFormRequest $request)
    {
        User::create(array_merge(
            $request->only('name', 'email'),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' => 'You were successfully registered. Use your email and password to sign in.',
        ], 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'errors' => 'Unauthorised',
            ], 401);
        }

        $token = Auth::user()->createToken(config('app.name'));
        $token->token->save();

        return response()->json([
            'token_type' => 'Bearer',
            'token' => $token->accessToken,
            'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString(),
        ], 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'You are successfully logged out',
        ]);
    }
}
