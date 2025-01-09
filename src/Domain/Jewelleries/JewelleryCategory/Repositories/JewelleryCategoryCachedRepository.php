<?php

declare(strict_types=1);

namespace Domain\Jewelleries\JewelleryCategory\Repositories;

use Domain\Jewelleries\JewelleryCategory\Models\JewelleryCategory;
use Domain\Shared\AbstractCachedRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class JewelleryCategoryCachedRepository extends AbstractCachedRepository implements JewelleryCategoryRepositoryInterface
{
    public function __construct(
        public JewelleryCategoryRepositoryInterface $jewelleryCategoryRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([JewelleryCategory::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->jewelleryCategoryRepositoryInterface->index($data);
            });
    }

    public function show(int $id, array $data): Model|JewelleryCategory
    {
        return Cache::tags([JewelleryCategory::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->jewelleryCategoryRepositoryInterface->show($id, $data);
            });
    }
}
