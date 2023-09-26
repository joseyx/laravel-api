<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Models\Empresa;
use App\Models\Redes;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        //
        $empresa = Empresa::latest()->first();
        $redes = Redes::latest()->first();

        return response()->json([
            'empresa' => $empresa,
            'redes' => $redes,
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormRequest $request): JsonResponse
    {
        //
        $empresa = Empresa::create(
            [
                'nombreEmpresa' => $request->nombreEmpresa,
                'rif' => $request->rif,
                'email' => $request->email,
                'emailSecondary' => $request->emailSecondary,
                'phone' => $request->phone,
                'phoneSecondary' => $request->phoneSecondary,
                'pais' => $request->pais,
                'estado' => $request->estado,
                'direccion' => $request->direccion
            ]
        );

        $redes = Redes::create(
            [
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
            ]
        );

        return response()->json([
            'empresa' => $empresa,
        ]);

    }


    /**
     * Display the latest empresa.
     */
    public function show(): JsonResponse
    {
        //
        $empresa = Empresa::latest()->first();

        return response()->json([
            'empresa' => $empresa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
