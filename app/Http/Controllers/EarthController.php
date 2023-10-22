<?php

namespace App\Http\Controllers;

use App\Models\Earth;
use Illuminate\Http\Request;

class EarthController extends Controller
{
    //

    public function index(Request $request)
    {
        $earth = Earth::find(1);

        return response()->json(['earth' => $earth]);
    }

    public function store(Request $request)
    {
        $earth = Earth::find(1);

        if ($earth) {
            $earth->update([
                'earth_link' => $request->earth_link,
            ]);
        } else {
            $earth = Earth::create([
                'id' => 1,
                'earth_link' => $request->earth_link,
            ]);
        }

        return response()->json(['earth' => $earth]);
    }

    public function show(Request $request, $id)
    {
        $earth = Earth::find($id);
        return response()->json(['earth' => $earth]);
    }

    public function destroy(Request $request, $id)
    {
        $earth = Earth::find($id);
        $earth->delete();

        return;
    }
}
