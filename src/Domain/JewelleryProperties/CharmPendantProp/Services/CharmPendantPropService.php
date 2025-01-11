<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\CharmPendantProp\Services;

use Domain\JewelleryProperties\CharmPendantProp\Pipelines\CharmPendantPropPipeline;
use Domain\JewelleryProperties\CharmPendantProp\Repositories\CharmPendantPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class CharmPendantPropService extends AbstractCRUDService
{
    public function __construct(
        public CharmPendantPropRepository $charmPendantPropRepository,
        public CharmPendantPropPipeline $charmPendantPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->charmPendantPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->charmPendantPropRepository->show($id, $data);
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
