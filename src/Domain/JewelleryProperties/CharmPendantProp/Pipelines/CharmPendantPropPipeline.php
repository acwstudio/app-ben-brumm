<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\CharmPendantProp\Pipelines;

use Domain\AbstractPipeline;
use Illuminate\Database\Eloquent\Model;

final class CharmPendantPropPipeline extends AbstractPipeline
{

    /**
     * @inheritDoc
     */
    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    /**
     * @inheritDoc
     */
    public function update(array $data): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
