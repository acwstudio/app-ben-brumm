<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Services;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertProperty\Repositories\InsertPropertyRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class InsertPropertyService
{
    public function __construct(
        public InsertPropertyRepository $insertPropertyRepository,
//        public InsertPropertyPipeline $insertPropertyPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertPropertyRepository->index($data);
    }

    public function show(int $id, array $data): Model|InsertProperty
    {
        // TODO: Implement show() method.
    }
}
