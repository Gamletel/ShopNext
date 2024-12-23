<?php

namespace App\Repositories\Interfaces;
interface ProductRepositoryInterface
{
    public function all();

    public function find(int $id);

    public function store(array $data);

    public function update(array $data, int $id);

    public function delete(int $id);
}
