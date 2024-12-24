<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UserStoreRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(private readonly UserService $userService)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json($this->userService->all());
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->userService->find($id));
    }

    public function store(UserStoreRequest $request): JsonResponse
    {
        return response()->json($this->userService->store($request));
    }

    public function update(UserUpdateRequest $request, int $id): JsonResponse
    {
        return response()->json($this->userService->update($request, $id));
    }

    public function destroy($id): JsonResponse
    {
        return response()->json($this->userService->delete($id));
    }
}
