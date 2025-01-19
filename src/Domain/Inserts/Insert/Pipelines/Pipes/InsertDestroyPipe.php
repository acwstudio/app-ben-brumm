<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Pipelines\Pipes;

use Domain\Inserts\Insert\Repositories\InsertRepository;

final class InsertDestroyPipe
{
    public function __construct(public InsertRepository $insertRepository)
    {
    }

    public function handle(int $id, \Closure $next): mixed
    {
        $this->insertRepository->destroy($id);

        return $next($id);
    }
}
