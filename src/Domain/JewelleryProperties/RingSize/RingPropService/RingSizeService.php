<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingSize\RingPropService;

use Domain\JewelleryProperties\RingSize\Pipelines\RingSizePipeline;
use Domain\JewelleryProperties\RingSize\Repositories\RingSizeRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class RingSizeService  extends AbstractCRUDService
{
    public function __construct(
        public RingSizeRepository $ringSizeRepository,
        public RingSizePipeline $ringSizePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->ringSizeRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->ringSizeRepository->show($id, $data);
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
