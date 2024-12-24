<?php

namespace App\Services;

use App\Http\Requests\Products\ProductStoreRequest;
use App\Http\Requests\Products\ProductUpdateRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class ProductService
{
    public function __construct(private ProductRepository $productRepository)
    {
    }

    public function all(): Collection
    {
        return $this->productRepository->all();
    }

    public function find(int $id)
    {
        return $this->productRepository->find($id);
    }

    public function store(ProductStoreRequest $data): Product
    {
        return $this->productRepository->store((array)$data);
    }

    public function update(ProductUpdateRequest $data, int $id)
    {
        return $this->productRepository->update((array)$data, $id);
    }

    public function delete(int $id): int
    {
        return $this->productRepository->delete($id);
    }
}
