<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Repositories;

use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Domain\Shared\AbstractRelationsRepository;
use ReflectionException;

final class WeavingRelationsRepository extends AbstractRelationsRepository
{
    /**
     * @throws ReflectionException
     */
    public function updateRelations(array $data): void
    {
        data_get($data, 'model') ?? data_set($data, 'model', Weaving::findOrFail(data_get($data, 'id')));
        $this->handleUpdateRelations($data);
    }
}
