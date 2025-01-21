<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Pipelines\Pipes;

use Domain\Inserts\StoneType\Repositories\RelationRepositories\StoneTypeStonesRelationsRepository;

final class StoneTypeStonesUpdateRelationsPipe
{
    public function __construct(public StoneTypeStonesRelationsRepository $repository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        $this->repository->update(data_get($data, 'data.relationships.stones'), data_get($data, 'id'));

        return $next($data);
    }
}
