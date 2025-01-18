<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Pipelines;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertProperty\Pipelines\Pipes\InsertPropertyStorePipe;
use Domain\Shared\AbstractPipeline;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

final class InsertPropertyPipeline extends AbstractPipeline
{

    /**
     * @throws Throwable
     */
    public function store(array $data): InsertProperty
    {
        try {
            DB::beginTransaction();

            $data = $this->pipeline
                ->send($data)
                ->through([
                    InsertPropertyStorePipe::class,
                ])
                ->thenReturn();

            DB::commit();

            return data_get($data, 'model');
        } catch (\Exception | Throwable $e) {
            DB::rollBack();
            Log::error($e);

            throw ($e);
        }
    }

    public function update(array $data): void
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
