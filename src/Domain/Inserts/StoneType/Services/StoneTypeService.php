<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Services;

use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Inserts\StoneType\Pipelines\StoneTypePipeline;
use Domain\Inserts\StoneType\Repositories\StoneTypeRepositoryInterface;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class StoneTypeService extends AbstractCRUDService implements StoneTypeRepositoryInterface
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

    /**
     * @throws \Throwable
     */
    public function store(array $data): StoneType
    {
        return $this->stoneTypePipeline->store($data);
    }

    public function show(array $data, int $id): StoneType
    {
        return $this->stoneTypeRepositoryInterface->show($id, $data);
    }

    /**
     * @throws \Throwable
     */
    public function update(array $data, int $id): void
    {
        $this->stoneTypePipeline->update($data, $id);
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
