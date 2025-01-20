<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Services;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\Stone\Pipelines\StonePipeline;
use Domain\Inserts\Stone\Repositories\StoneRepositoryInterface;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class StoneService extends AbstractCRUDService
{
    public function __construct(
        public StoneRepositoryInterface $stoneRepositoryInterface,
        public StonePipeline $stonePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->stoneRepositoryInterface->index($data);
    }

    /**
     * @throws \Throwable
     */
    public function store(array $data): Stone
    {
        return $this->stonePipeline->store($data);
    }

    public function show(array $data, int $id): Model|Stone
    {
        return $this->stoneRepositoryInterface->show($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function update(array $data, int $id): void
    {
        $this->stonePipeline->update($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(int $id): void
    {
        $this->stonePipeline->destroy($id);
    }
}
