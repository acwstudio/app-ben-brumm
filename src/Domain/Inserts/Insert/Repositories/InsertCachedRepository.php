<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Shared\AbstractCachedRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class InsertCachedRepository extends AbstractCachedRepository implements InsertRepositoryInterface
{
    public function __construct(
        public InsertRepositoryInterface $insertRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([Insert::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->insertRepositoryInterface->index($data);
            });
    }

    public function show(int $id, array $data): Model|Insert
    {
        return Cache::tags([Insert::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->insertRepositoryInterface->show($id, $data);
            });
    }
}
