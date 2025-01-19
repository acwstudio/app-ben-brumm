<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Pipelines\Pipes;

use Domain\Inserts\InsertColour\Repositories\InsertColourRepository;

final class InsertColourDestroyPipe
{
    public function __construct(public InsertColourRepository $insertColourRepository)
    {
    }

    public function handle(int $id, \Closure $next): mixed
    {
        $this->insertColourRepository->destroy($id);

        return $next($id);
    }
}
