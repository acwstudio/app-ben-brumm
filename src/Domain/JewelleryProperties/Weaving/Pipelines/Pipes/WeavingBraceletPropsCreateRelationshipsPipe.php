<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Pipelines\Pipes;

use Domain\JewelleryProperties\Weaving\Repositories\WeavingRelationsRepository;

final class WeavingBraceletPropsCreateRelationshipsPipe
{
    public function __construct(public WeavingRelationsRepository $weavingRelationsRepository)
    {
    }

    /**
     * @throws \ReflectionException
     */
    public function handle(array $data, \Closure $next)
    {
        $relationData = data_get($data, 'data.relationships.braceletProps');

        if ($relationData) {
            data_set($data, 'relation_data', $relationData);
            data_set($data, 'relation_method', 'braceletProps');

            $this->weavingRelationsRepository->updateRelations($data);
        }

        return $next($data);
    }
}
