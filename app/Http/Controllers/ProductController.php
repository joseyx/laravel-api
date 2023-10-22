<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        // Retrieve all products
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request): JsonResponse
    {
        // Create a new product instance with the validated data
        $product = new Product([
            'productName' => $request->input('productName'),
            'productDescription' => $request->input('productDescription'),
            'productPrice' => $request->input('productPrice'),
            'productImages' => [],
        ]);

        // Save the product to the database
        $product->save();

        // Store the uploaded images
        $this->storeProductImages($request, $product);

        // Return a JSON response with the created product and a 201 status code
        return response()->json($product, 201);
    }

    private function storeProductImages(StoreProductRequest $request, Product $product): void
    {
        // Store the uploaded images in a folder named after the product name
        $productImages = [];
        foreach ($request->file('productImages') as $image) {
            $imageName = Str::random(40).'.'.$image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images/'.$product->productName, $imageName);

            $productImages[] = $imagePath;
        }

        // Update the product's image paths
        $product->productImages = $productImages;
        $product->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        // Retrieve the product
        $product = Product::findOrFail($id);

        // Return a JSON response with the product and a 200 status code
        return response()->json($product);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): JsonResponse
    {
        //
        $product->delete();

        return response()->json(null, 204);
    }
}
