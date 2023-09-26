<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConfigRequest;
use App\Models\Config;
use Illuminate\Http\JsonResponse;

class ConfigController extends Controller
{
    public function index(): JsonResponse
    {
        $config = Config::find(1);

        return response()->json(
            $config,
        );
    }

    public function store(StoreConfigRequest $request)
    {
        // Retrieve validated data from the request
        $validatedData = $request->validated();

        // Process and save the image
        $imagePath = $this->processAndSaveImage($request->file('image'));

        // Process and save the favicon
        $faviconPath = $request->file('favicon')->store('storage/favicons');

        // Find or create the config with ID 1 and update its attributes
        $config = Config::updateOrCreate(['id' => 1], [
            'favicon' => $faviconPath,
            'image' => $imagePath,
            'color1' => $validatedData['color1'],
            'color2' => $validatedData['color2'],
            'color3' => $validatedData['color3'],
        ]);

        return response()->json([
            'image_path' => $imagePath,
            'favicon_path' => $faviconPath,
            'color1' => $validatedData['color1'],
            'color2' => $validatedData['color2'],
            'color3' => $validatedData['color3'],
        ]);
    }

    private function processAndSaveImage($image)
    {
        $imagePath = $image->store('storage/images');

        return $imagePath;
    }
}
