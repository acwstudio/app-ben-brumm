<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Pipelines\Pipes;

use Domain\Inserts\StoneType\Repositories\StoneTypeRepository;

final class StoneTypeDestroyPipe
{
    public function __construct(public StoneTypeRepository $stoneTypeRepository)
    {
    }

    public function handle(int $id, \Closure $next): mixed
    {
        $this->stoneTypeRepository->destroy($id);

        return $next($id);
    }
}
