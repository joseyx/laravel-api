<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(Request $request) {
        //
        if (Auth::user()) {
            return response()->json([
                'user' => Auth::user(),
            ]);
        }
        return response()->json([
            'message' => 'Unauthorized',
        ], JsonResponse::HTTP_UNAUTHORIZED);
    }
}
