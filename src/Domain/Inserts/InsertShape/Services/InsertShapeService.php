<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Services;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Inserts\InsertShape\Repositories\InsertShapeRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class InsertShapeService implements InsertShapeRepositoryInterface
{
    public function __construct(
        public InsertShapeRepositoryInterface $insertShapeRepositoryInterface,
//        public InsertShapePipeline $insertShapePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertShapeRepositoryInterface->index($data);
    }

    public function store(array $data): InsertShape
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): InsertShape
    {
        // TODO: Implement show() method.
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
