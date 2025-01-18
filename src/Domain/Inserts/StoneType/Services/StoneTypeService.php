<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Services;

use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Inserts\StoneType\Pipelines\StoneTypePipeline;
use Domain\Inserts\StoneType\Repositories\StoneTypeRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class StoneTypeService implements StoneTypeRepositoryInterface
{
    public function __construct(
        public StoneTypeRepositoryInterface $stoneTypeRepositoryInterface,
        public StoneTypePipeline $stoneTypePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->stoneTypeRepositoryInterface->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model|StoneType
    {
        return $this->stoneTypeRepositoryInterface->show($id, $data);
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
