<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Pipelines\Pipes;

use Domain\Inserts\InsertShape\Repositories\InsertShapeRepository;
use Illuminate\Support\Str;

final class InsertShapeUpdatePipe
{
    public function __construct(public InsertShapeRepository $repository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        data_set($data, 'data.attributes.slug', Str::slug(data_get($data, 'data.attributes.name')), '-');
        $this->repository->update(data_get($data, 'data.attributes'), data_get($data, 'id'));

        return $next($data);
    }
}
