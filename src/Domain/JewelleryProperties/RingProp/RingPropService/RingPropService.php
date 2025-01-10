<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingProp\RingPropService;

use Domain\JewelleryProperties\RingProp\Pipelines\RingPropPipeline;
use Domain\JewelleryProperties\RingProp\Repositories\RingPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class RingPropService extends AbstractCRUDService
{
    public function __construct(
        public RingPropRepository $ringPropRepository,
        public RingPropPipeline $ringPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->ringPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->ringPropRepository->show($id, $data);
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
