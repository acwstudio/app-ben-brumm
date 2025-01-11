<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainProp\Services;

use Domain\JewelleryProperties\ChainProp\Pipelines\ChainPropPipeline;
use Domain\JewelleryProperties\ChainProp\Repositories\ChainPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class ChainPropService extends AbstractCRUDService
{
    public function __construct(
        public ChainPropRepository $chainPropRepository,
        public ChainPropPipeline $chainPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->chainPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->chainPropRepository->show($id, $data);
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
