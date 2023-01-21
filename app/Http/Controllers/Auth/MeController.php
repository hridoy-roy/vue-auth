<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function __invoke(Request $request)
    {
        return response()->json([
            'email' => $request->user()->email,
            'name' => $request->user()->name,
        ]);
    }
}
