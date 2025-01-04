<?php

declare(strict_types=1);

namespace Domain\Inserts\Services\Stone;

use Domain\Inserts\Models\Stone;
use Domain\Inserts\Repositories\Stone\StoneRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class StoneService implements StoneRepositoryInterface
{
    public function __construct(
        public StoneRepositoryInterface $stoneRepositoryInterface,
//        public StonePipeline $stonePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->stoneRepositoryInterface->index($data);
    }

    public function show(int $id, array $data): Model|Stone
    {
        // TODO: Implement show() method.
    }
}
