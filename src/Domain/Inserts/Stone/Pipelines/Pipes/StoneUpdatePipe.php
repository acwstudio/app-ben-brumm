<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Pipelines\Pipes;

use Domain\Inserts\Stone\Repositories\StoneRepository;
use Illuminate\Support\Str;

final class StoneUpdatePipe
{
    public function __construct(public StoneRepository $repository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        data_set($data, 'data.attributes.slug', Str::slug(data_get($data, 'data.attributes.name')), '-');
        $this->repository->update(data_get($data, 'data.attributes'), data_get($data, 'id'));

        return $next($data);
    }
}
