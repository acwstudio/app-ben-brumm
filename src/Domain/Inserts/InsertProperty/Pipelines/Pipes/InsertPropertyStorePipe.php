<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Pipelines\Pipes;

use Domain\Inserts\InsertProperty\Repositories\InsertPropertyRepository;

final class InsertPropertyStorePipe
{
    public function __construct(public InsertPropertyRepository $repository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        $model = $this->repository->store($data);
        data_set($data, 'model', $model);
        data_set($data, 'id', $model->id);

        return $next($data);
    }
}
