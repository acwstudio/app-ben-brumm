<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\PiercingProp\Services;

use Domain\JewelleryProperties\PiercingProp\Pipelines\PiercingPropPipeline;
use Domain\JewelleryProperties\PiercingProp\Repositories\PiercingPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class PiercingPropService extends AbstractCRUDService
{
    public function __construct(
        public PiercingPropRepository $piercingPropRepository,
        public PiercingPropPipeline $piercingPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->piercingPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->piercingPropRepository->show($id, $data);
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
