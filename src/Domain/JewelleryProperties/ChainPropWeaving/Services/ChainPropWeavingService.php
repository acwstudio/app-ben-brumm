<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainPropWeaving\Services;

use Domain\JewelleryProperties\ChainPropWeaving\Pipelines\ChainPropWeavingPipeline;
use Domain\JewelleryProperties\ChainPropWeaving\Repositories\ChainPropWeavingRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class ChainPropWeavingService extends AbstractCRUDService
{
    public function __construct(
        public ChainPropWeavingRepository $chainPropWeavingRepository,
        public ChainPropWeavingPipeline $chainPropWeavingPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->chainPropWeavingRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->chainPropWeavingRepository->show($id, $data);
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
