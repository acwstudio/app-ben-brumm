<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Pipelines\Pipes;

use Domain\Inserts\StoneType\Repositories\StoneTypeRepository;

final class StoneTypeUpdatePipe
{
    public function __construct(public StoneTypeRepository $stoneTypeRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        $this->stoneTypeRepository->update(data_get($data, 'data.attributes'), data_get($data, 'id'));

        return $next($data);
    }
}
