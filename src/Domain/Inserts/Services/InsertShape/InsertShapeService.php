<?php

declare(strict_types=1);

namespace Domain\Inserts\Services\InsertShape;

use Domain\Inserts\Models\InsertShape;
use Domain\Inserts\Repositories\InsertProperty\InsertShapeRepositoryInterface;
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

    public function show(int $id, array $data): Model|InsertShape
    {
        // TODO: Implement show() method.
    }
}
