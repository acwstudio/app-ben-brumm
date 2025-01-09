<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklaceSize\Services;

use Domain\JewelleryProperties\NecklaceSize\Pipelines\NecklaceSizePipeline;
use Domain\JewelleryProperties\NecklaceSize\Repositories\NecklaceSizeRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class NecklaceSizeService extends AbstractCRUDService
{
    public function __construct(
        public NecklaceSizeRepository $necklaceSizeRepository,
        public NecklaceSizePipeline $necklaceSizePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->necklaceSizeRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->necklaceSizeRepository->show($id, $data);
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
