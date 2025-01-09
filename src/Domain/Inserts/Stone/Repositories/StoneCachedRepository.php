<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Repositories;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\AbstractCachedRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class StoneCachedRepository extends AbstractCachedRepository implements StoneRepositoryInterface
{
    public function __construct(
        public StoneRepositoryInterface $stoneRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([Stone::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->stoneRepositoryInterface->index($data);
            });
    }

    public function show(int $id, array $data): Model|Stone
    {
        return Cache::tags([Stone::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->stoneRepositoryInterface->show($id, $data);
            });
    }
}
