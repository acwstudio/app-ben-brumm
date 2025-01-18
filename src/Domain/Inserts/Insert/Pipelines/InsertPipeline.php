<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Pipelines;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertInsertPropertyUpdateRelationsPipe;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertsInsertColourUpdateRelationsPipe;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertsInsertShapeUpdateRelationsPipe;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertsJewelleryUpdateRelationsPipe;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertsStoneUpdateRelationsPipe;
use Domain\Shared\AbstractPipeline;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

final class InsertPipeline extends AbstractPipeline
{

    /**
     * @throws Throwable
     */
    public function store(array $data): Insert
    {
        try {
            DB::beginTransaction();

            $data = $this->pipeline
                ->send($data)
                ->through([

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
