<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Models\Empresa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $empresa = Empresa::find(1);

        return response()->json([
            'empresa' => $empresa,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormRequest $request)
    {
        //
        $empresa = Empresa::create([
            'nombreEmpresa' => $request->nombreEmpresa,
            'rif' => $request->rif,
            'email' => $request->email,
            'emailSecondary' => $request->emailSecondary,
            'phone' => $request->phone,
            'phoneSecondary' => $request->phoneSecondary,
            'pais' => $request->pais,
            'estado' => $request->estado,
            'direccion' => $request->direccion,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
