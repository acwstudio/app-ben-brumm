<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\TieClipProp\Services;

use Domain\JewelleryProperties\TieClipProp\Pipelines\TieClipPropPipeline;
use Domain\JewelleryProperties\TieClipProp\Repositories\TieClipPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class TieClipPropService extends AbstractCRUDService
{
    public function __construct(
        public TieClipPropRepository $tieClipPropRepository,
        public TieClipPropPipeline $tieClipPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->tieClipPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->tieClipPropRepository->show($id, $data);
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
