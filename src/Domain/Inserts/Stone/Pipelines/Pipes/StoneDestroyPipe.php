<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Pipelines\Pipes;

use Domain\Inserts\Stone\Repositories\StoneRepository;

final class StoneDestroyPipe
{
    public function __construct(public StoneRepository $repository)
    {
    }

    public function handle(int $id, \Closure $next): mixed
    {
        $this->repository->destroy($id);

        return $next($id);
    }
}
