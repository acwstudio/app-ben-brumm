<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklaceProp\Services;

use Domain\JewelleryProperties\NecklaceProp\Pipelines\NecklacePropPipeline;
use Domain\JewelleryProperties\NecklaceProp\Repositories\NecklacePropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class NecklacePropService extends AbstractCRUDService
{
    public function __construct(
        public NecklacePropRepository $necklacePropRepository,
        public NecklacePropPipeline $necklacePropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->necklacePropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->necklacePropRepository->show($id, $data);
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
