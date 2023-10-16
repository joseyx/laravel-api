<?php

namespace App\Http\Controllers;

use App\Models\Redes;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RedesController extends Controller
{
    //
    public function index(): JsonResponse
    {
        //
        $redes = Redes::latest()->first();

        return response()->json([
            'redes' => $redes,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        //
        $redes = Redes::create(
            [
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
            ]
        );

        return response()->json([
            'redes' => $redes,
        ]);
    }
}
