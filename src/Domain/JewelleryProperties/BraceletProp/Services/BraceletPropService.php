<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletProp\Services;

use Domain\JewelleryProperties\BraceletProp\Pipelines\BraceletPropPipeline;
use Domain\JewelleryProperties\BraceletProp\Repositories\BraceletPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class BraceletPropService extends AbstractCRUDService
{
    public function __construct(
        public BraceletPropRepository $braceletPropRepository,
        public BraceletPropPipeline $braceletPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->braceletPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->braceletPropRepository->show($id, $data);
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
