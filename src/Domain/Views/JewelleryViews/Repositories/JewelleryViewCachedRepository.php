<?php

declare(strict_types=1);

namespace Domain\Views\JewelleryViews\Repositories;

use Domain\Shared\AbstractCachedRepository;
use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

final class JewelleryViewCachedRepository extends AbstractCachedRepository implements JewelleryViewRepositoryInterface
{
    public function __construct(
        public JewelleryViewRepositoryInterface $jewelleryViewRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return Cache::tags([JewelleryView::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($data) {
                return $this->jewelleryViewRepositoryInterface->index($data);
            });
    }

    public function show(int $id, array $data): Model|JewelleryView
    {
        return Cache::tags([JewelleryView::class])->remember($this->getCacheKey($data), $this->getTtl(),
            function () use ($id, $data) {
                return $this->jewelleryViewRepositoryInterface->show($id, $data);
            });
    }
}
