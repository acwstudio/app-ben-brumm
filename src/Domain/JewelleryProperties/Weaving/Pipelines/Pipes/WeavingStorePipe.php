<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Pipelines\Pipes;

use Domain\JewelleryProperties\Weaving\Repositories\WeavingRepository;

final class WeavingStorePipe
{
    public function __construct(public WeavingRepository $weavingRepository)
    {
    }

    public function handle(array $data, \Closure $next): mixed
    {
        $model = $this->weavingRepository->store($data);
        data_set($data, 'model', $model);
        data_set($data, 'id', $model->id);

        return $next($data);
    }
}
