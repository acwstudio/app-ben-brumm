<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Pipelines\Pipes;

use Domain\Inserts\InsertProperty\Repositories\InsertPropertyRepository;

final class InsertPropertyDestroyPipe
{
    public function __construct(public InsertPropertyRepository $repository)
    {
    }

    public function handle(int $id, \Closure $next): mixed
    {
        $this->repository->destroy($id);

        return $next($id);
    }
}
