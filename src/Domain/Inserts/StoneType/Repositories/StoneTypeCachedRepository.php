<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Repositories;

use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Shared\AbstractCachedRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class StoneTypeCachedRepository extends AbstractCachedRepository implements StoneTypeRepositoryInterface
{
    public function __construct(
        public StoneTypeRepositoryInterface $stoneTypeRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([StoneType::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->stoneTypeRepositoryInterface->index($data);
            });
    }

    public function show(int $id, array $data): Model|StoneType
    {
        return Cache::tags([StoneType::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->stoneTypeRepositoryInterface->show($id, $data);
            });
    }
}
