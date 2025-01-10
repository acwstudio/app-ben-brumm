<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainPropSize\Services;

use Domain\JewelleryProperties\ChainPropSize\Pipelines\ChainPropSizePipeline;
use Domain\JewelleryProperties\ChainPropSize\Repositories\ChainPropSizeRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class ChainPropSizeService extends AbstractCRUDService
{
    public function __construct(
        public ChainPropSizeRepository $chainPropSizeRepository,
        public ChainPropSizePipeline $chainPropSizePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->chainPropSizeRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->chainPropSizeRepository->show($id, $data);
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
