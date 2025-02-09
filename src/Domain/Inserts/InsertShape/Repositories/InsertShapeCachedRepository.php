<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Repositories;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Shared\AbstractCachedRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class InsertShapeCachedRepository extends AbstractCachedRepository implements InsertShapeRepositoryInterface
{
    public function __construct(
        public InsertShapeRepositoryInterface $insertShapeRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([InsertShape::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->insertShapeRepositoryInterface->index($data);
            });
    }

    public function show(array $data, int $id): InsertShape
    {
        return Cache::tags([InsertShape::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->insertShapeRepositoryInterface->show($data, $id);
            });
    }
}
