<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingPropSize\RingPropService;

use Domain\JewelleryProperties\RingPropSize\Pipelines\RingPropSizePipeline;
use Domain\JewelleryProperties\RingPropSize\Repositories\RingPropSizeRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class RingPropSizeService extends AbstractCRUDService
{
    public function __construct(
        public RingPropSizeRepository $ringPropSizeRepository,
        public RingPropSizePipeline $ringPropSizePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->ringPropSizeRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->ringPropSizeRepository->show($id, $data);
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
