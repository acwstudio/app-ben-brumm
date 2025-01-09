<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Repositories;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Shared\AbstractCachedRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class InsertColourCachedRepository extends AbstractCachedRepository implements InsertColourRepositoryInterface
{
    public function __construct(
        public InsertColourRepositoryInterface $insertColourRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([InsertColour::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->insertColourRepositoryInterface->index($data);
            });
    }

    public function show(int $id, array $data): Model|InsertColour
    {
        return Cache::tags([InsertColour::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->insertColourRepositoryInterface->show($id, $data);
            });
    }
}
