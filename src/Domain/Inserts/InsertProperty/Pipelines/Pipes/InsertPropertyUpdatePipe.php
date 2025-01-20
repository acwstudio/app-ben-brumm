<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Pipelines\Pipes;

use Domain\Inserts\InsertProperty\Repositories\InsertPropertyRepository;

final class InsertPropertyUpdatePipe
{
    public function __construct(public InsertPropertyRepository $repository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        $this->repository->update(data_get($data, 'data.attributes'), data_get($data, 'id'));

        return $next($data);
    }
}
