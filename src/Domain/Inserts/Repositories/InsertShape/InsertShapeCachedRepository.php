<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\InsertShape;

use Domain\AbstractCachedRepository;
use Domain\Inserts\Models\InsertShape;
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

    public function show(int $id, array $data): Model|InsertShape
    {
        return Cache::tags([InsertShape::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->insertShapeRepositoryInterface->show($id, $data);
            });
    }
}
