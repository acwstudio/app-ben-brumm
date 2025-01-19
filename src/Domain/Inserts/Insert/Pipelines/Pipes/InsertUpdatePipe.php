<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Pipelines\Pipes;

use Domain\Inserts\Insert\Repositories\InsertRepository;

final class InsertUpdatePipe
{
    public function __construct(public InsertRepository $insertRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        $this->insertRepository->update(data_get($data, 'data.attributes'), data_get($data, 'id'));

        return $next($data);
    }
}
