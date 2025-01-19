<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Pipelines\Pipes;

use Domain\Inserts\InsertColour\Repositories\InsertColourRepository;
use Illuminate\Support\Str;

final class InsertColourUpdatePipe
{
    public function __construct(public InsertColourRepository $insertColourRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        data_set($data, 'data.attributes.slug', Str::slug(data_get($data, 'data.attributes.name')), '-');
        $this->insertColourRepository->update(data_get($data, 'data.attributes'), data_get($data, 'id'));

        return $next($data);
    }
}
