<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Clasp\Services;

use Domain\JewelleryProperties\Clasp\Pipelines\ClaspPipeline;
use Domain\JewelleryProperties\Clasp\Repositories\ClaspRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class ClaspService extends AbstractCRUDService
{
    public function __construct(
        public ClaspRepository $claspRepository,
        public ClaspPipeline $claspPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->claspRepository->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->claspRepository->show($id, $data);
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
