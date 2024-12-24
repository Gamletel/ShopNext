<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\ProductStoreRequest;
use App\Http\Requests\Products\ProductUpdateRequest;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function __construct(private readonly ProductService $productService)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json($this->productService->all());
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->productService->find($id));
    }

    public function store(ProductStoreRequest $request): JsonResponse
    {
        return response()->json($this->productService->store($request));
    }

    public function update(ProductUpdateRequest $request, int $id): JsonResponse
    {
        return response()->json($this->productService->update($request, $id));
    }
}
