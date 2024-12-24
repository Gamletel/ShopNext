<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{

    public function all(): Collection
    {
        return Product::all();
    }

    public function find(int $id)
    {
        return Product::findOrFail($id);
    }

    public function store(array $data): Product
    {
        $product = new Product();
        $product->fill($data);
        $product->save();
        return $product;
    }

    public function update(array $data, int $id)
    {
        $product = Product::findOrFail($id);
        $product->fill($data);
        $product->save();
        return $product;
    }

    public function delete(int $id): int
    {
        return Product::destroy($id);
    }
}
