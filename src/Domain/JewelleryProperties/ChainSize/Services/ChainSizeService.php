<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainSize\Services;

use Domain\JewelleryProperties\ChainSize\Pipelines\ChainSizePipeline;
use Domain\JewelleryProperties\ChainSize\Repositories\ChainSizeRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class ChainSizeService  extends AbstractCRUDService
{
    public function __construct(
        public ChainSizeRepository $chainSizeRepository,
        public ChainSizePipeline $chainSizePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->chainSizeRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->chainSizeRepository->show($id, $data);
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
