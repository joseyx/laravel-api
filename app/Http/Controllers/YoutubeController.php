<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    //
    public function index(Request $request)
    {
        $youtube = Youtube::all();

        return response()->json(['youtube' => $youtube]);
    }

    public function store(Request $request)
    {
        $youtube = Youtube::create([
            'video_link' => $request->video_link,
        ]);

        return response()->json(['youtube' => $youtube]);
    }

    public function show(Request $request, $id)
    {
        $youtube = Youtube::find($id);
        return response()->json(['youtube' => $youtube]);
    }

    public function destroy(Request $request, $id)
    {
        $youtube = Youtube::find($id);
        $youtube->delete();

        return;
    }

    public function update(Request $request, $id)
    {
        $youtube = Youtube::find($id);
        $youtube->update([
            'video_link' => $request->video_link,
        ]);

        return response()->json(['youtube' => $youtube]);
    }
}
