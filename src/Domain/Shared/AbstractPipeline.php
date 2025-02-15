<?php

declare(strict_types=1);

namespace Domain\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

abstract class AbstractPipeline
{
    protected Pipeline $pipeline;

    /**
     * @param Pipeline $pipeline
     */
    public function __construct(Pipeline $pipeline)
    {
        $this->pipeline = $pipeline;
    }

    /**
     * @param array $data
     * @return Model
     */
    abstract public function store(array $data): Model;

    /**
     * @param array $data
     * @param int $id
     * @return void
     */
    abstract public function update(array $data, int $id): void;

    /**
     * @param int $id
     * @return void
     */
    abstract public function destroy(int $id): void;
}
