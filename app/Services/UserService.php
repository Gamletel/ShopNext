<?php

namespace App\Services;

use App\Http\Requests\Users\UserStoreRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class UserService
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function all(): Collection
    {
        return $this->userRepository->all();
    }

    public function find(int $id): Collection
    {
        return $this->userRepository->find($id);
    }

    public function delete(int $id): int
    {
        return $this->userRepository->delete($id);
    }

    public function store(UserStoreRequest $request): User
    {
        return $this->userRepository->store((array)$request);
    }

    public function update(UserUpdateRequest $request, int $id): User
    {
        return $this->userRepository->update((array)$request, $id);
    }
}
