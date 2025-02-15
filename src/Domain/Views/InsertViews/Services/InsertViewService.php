<?php

declare(strict_types=1);

namespace Domain\Views\InsertViews\Services;

use Domain\Views\InsertViews\Models\InsertView;
use Domain\Views\InsertViews\Repositories\InsertViewRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class InsertViewService
{
    public function __construct(
        public InsertViewRepository $repository
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->repository->index($data);
    }

    public function show(array $data, int $id): Model|InsertView
    {
        return $this->repository->show($id, $data);
    }
}
