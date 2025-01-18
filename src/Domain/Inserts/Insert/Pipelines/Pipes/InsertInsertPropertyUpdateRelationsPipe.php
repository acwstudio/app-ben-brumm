<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Pipelines\Pipes;

use Domain\Inserts\Insert\Repositories\InsertRepository;

final class InsertInsertPropertyUpdateRelationsPipe
{
    public function __construct(public InsertRepository $insertRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
//        $model = $this->insertRepository->update($data);
//        data_set($data, 'model', $model);

        return $next($data);
    }
}
