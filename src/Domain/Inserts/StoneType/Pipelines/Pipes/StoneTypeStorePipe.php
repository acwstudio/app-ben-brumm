<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Pipelines\Pipes;

use Domain\Inserts\StoneType\Repositories\StoneTypeRepository;
use Illuminate\Support\Str;

final class StoneTypeStorePipe
{
    public function __construct(public StoneTypeRepository $stoneTypeRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        data_set($data, 'data.attributes.slug', Str::slug(data_get($data, 'data.attributes.name')), '-');

        $model = $this->stoneTypeRepository->store(data_get($data, 'data.attributes'));

        data_set($data, 'model', $model);
        data_set($data, 'id', $model->id);

        return $next($data);
    }
}
