<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instagram;

class InstagramController extends Controller
{
    //
    public function index(Request $request)
    {
        $instagram = Instagram::all();

        return response()->json(['instagram' => $instagram]);
    }

    public function store(Request $request)
    {
        $instagram = Instagram::create([
            'post_link' => $request->post_link,
        ]);

        return response()->json(['instagram' => $instagram]);
    }

    public function show(Request $request, $id)
    {
        $instagram = Instagram::find($id);
        return response()->json(['instagram' => $instagram]);
    }

    public function destroy(Request $request, $id)
    {
        $instagram = Instagram::find($id);
        $instagram->delete();

        return;
    }

    public function update(Request $request, $id)
    {
        $instagram = Instagram::find($id);
        $instagram->update([
            'post_link' => $request->post_link,
        ]);

        return response()->json(['instagram' => $instagram]);
    }
}
