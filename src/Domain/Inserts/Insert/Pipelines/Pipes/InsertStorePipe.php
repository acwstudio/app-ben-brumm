<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Pipelines\Pipes;

use Domain\Inserts\Insert\Repositories\InsertRepository;

final class InsertStorePipe
{
    public function __construct(public InsertRepository $insertRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        $model = $this->insertRepository->store($data);
        data_set($data, 'model', $model);
        data_set($data, 'id', $model->id);

        return $next($data);
    }
}
