<?php

declare(strict_types=1);

namespace Domain\Inserts\Services\InsertProperty;

use Domain\Inserts\Models\InsertProperty;
use Domain\Inserts\Repositories\InsertProperty\InsertPropertyRepository;
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
