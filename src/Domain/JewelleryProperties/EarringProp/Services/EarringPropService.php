<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\EarringProp\Services;

use Domain\JewelleryProperties\EarringProp\Pipelines\EarringPropPipeline;
use Domain\JewelleryProperties\EarringProp\Repositories\EarringPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class EarringPropService extends AbstractCRUDService
{
    public function __construct(
        public EarringPropRepository $earringPropRepository,
        public EarringPropPipeline $earringPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->earringPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->earringPropRepository->show($id, $data);
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
