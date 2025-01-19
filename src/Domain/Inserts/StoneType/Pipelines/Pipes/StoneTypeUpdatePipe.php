<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Pipelines\Pipes;

use Domain\Inserts\StoneType\Repositories\StoneTypeRepository;
use Illuminate\Support\Str;

final class StoneTypeUpdatePipe
{
    public function __construct(public StoneTypeRepository $stoneTypeRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        data_set($data, 'data.attributes.slug', Str::slug(data_get($data, 'data.attributes.name')), '-');
        $this->stoneTypeRepository->update(data_get($data, 'data.attributes'), data_get($data, 'id'));

        return $next($data);
    }
}
