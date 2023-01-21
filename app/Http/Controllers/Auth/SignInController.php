<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function __invoke(Request $request): \Illuminate\Http\Response|\Illuminate\Http\JsonResponse|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        if (!$token = auth()->attempt($request->only('email','password'))){
            return response(null,401);
        }

        return response()->json(compact('token'));
    }
}
