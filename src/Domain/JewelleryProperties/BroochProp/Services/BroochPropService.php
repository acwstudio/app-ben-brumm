<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BroochProp\Services;

use Domain\JewelleryProperties\BroochProp\Pipelines\BroochPropPipeline;
use Domain\JewelleryProperties\BroochProp\Repositories\BroochPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class BroochPropService extends AbstractCRUDService
{
    public function __construct(
        public BroochPropRepository $brochPropRepository,
        public BroochPropPipeline $brochPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->brochPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->brochPropRepository->show($id, $data);
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
