<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Services;

use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Domain\JewelleryProperties\Weaving\Pipelines\WeavingPipeline;
use Domain\JewelleryProperties\Weaving\Repositories\WeavingRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class WeavingService  extends AbstractCRUDService
{
    public function __construct(
        public WeavingRepository $weavingRepository,
        public WeavingPipeline $weavingPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->weavingRepository->index($data);
    }

    public function show(int $id, array $data): Model|Weaving
    {
        return $this->weavingRepository->show($id, $data);
    }

    /**
     * @throws \Throwable
     */
    public function store(array $data): Model|Weaving
    {
        return $this->weavingPipeline->store($data);
    }

    public function update(array $data): void
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
