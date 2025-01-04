<?php

declare(strict_types=1);

namespace Domain\Inserts\Services\Stone;

use Domain\Inserts\Repositories\Stone\StoneRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;

final class StoneService
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
}
