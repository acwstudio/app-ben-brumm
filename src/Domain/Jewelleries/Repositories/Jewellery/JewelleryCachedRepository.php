<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Repositories\Jewellery;

use Domain\AbstractCachedRepository;
use Domain\Jewelleries\Models\Jewellery;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class JewelleryCachedRepository extends AbstractCachedRepository implements JewelleryRepositoryInterface
{
    public function __construct(
        public JewelleryRepositoryInterface $jewelleryRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([Jewellery::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->jewelleryRepositoryInterface->index($data);
            });
    }

    public function show(int $id, array $data): Model|Jewellery
    {
        return Cache::tags([Jewellery::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->jewelleryRepositoryInterface->show($id, $data);
            });
    }
}
