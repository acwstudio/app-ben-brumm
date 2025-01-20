<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Pipelines\Pipes;

use Domain\Inserts\InsertShape\Repositories\InsertShapeRepository;

final class InsertShapeDestroyPipe
{
    public function __construct(public InsertShapeRepository $repository)
    {
    }

    public function handle(int $id, \Closure $next): mixed
    {
        $this->repository->destroy($id);

        return $next($id);
    }
}
