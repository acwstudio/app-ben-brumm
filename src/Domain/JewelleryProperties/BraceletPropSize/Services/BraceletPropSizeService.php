<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletPropSize\Services;

use Domain\JewelleryProperties\BraceletPropSize\Pipelines\BraceletPropSizePipeline;
use Domain\JewelleryProperties\BraceletPropSize\Repositories\BraceletPropSizeRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class BraceletPropSizeService extends AbstractCRUDService
{
    public function __construct(
        public BraceletPropSizeRepository $braceletPropSizeRepository,
        public BraceletPropSizePipeline $braceletPropSizePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->braceletPropSizeRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->braceletPropSizeRepository->show($id, $data);
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
