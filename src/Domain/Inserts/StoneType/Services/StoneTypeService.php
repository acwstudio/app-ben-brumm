<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Services;

use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Inserts\StoneType\Repositories\StoneTypeRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class StoneTypeService implements StoneTypeRepositoryInterface
{
    public function __construct(
        public StoneTypeRepositoryInterface $stoneTypeRepositoryInterface,
//        public StonePipeline $stonePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->stoneTypeRepositoryInterface->index($data);
    }

    public function show(int $id, array $data): Model|StoneType
    {
        // TODO: Implement show() method.
    }
}
