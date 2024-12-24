<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function find(int $id): Collection
    {
        return User::findOrFail($id);
    }

    public function all(): Collection
    {
        return User::all();
    }

    public function store(array $data): User
    {
        $user = new User();
        $user->fill($data);
        $user->save();
        return $user;
    }

    public function update(array $data, int $id)
    {
        $user = User::findOrFail($id);

        $user->fill($data);

        $user->save();

        return $user;
    }

    public function delete($id): bool
    {
        return User::destroy($id);
    }
}
