<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\CufflinkProp\Services;

use Domain\JewelleryProperties\CufflinkProp\Pipelines\CufflinkPropPipeline;
use Domain\JewelleryProperties\CufflinkProp\Repositories\CuffLinkPropRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class CuffLinkPropService extends AbstractCRUDService
{
    public function __construct(
        public CuffLinkPropRepository $cuffLinkPropRepository,
        public CuffLinkPropPipeline $cuffLinkPropPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->cuffLinkPropRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->cuffLinkPropRepository->show($id, $data);
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
