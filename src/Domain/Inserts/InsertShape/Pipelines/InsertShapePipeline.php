<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Pipelines;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Inserts\InsertShape\Pipelines\Pipes\InsertShapeDestroyPipe;
use Domain\Inserts\InsertShape\Pipelines\Pipes\InsertShapeStorePipe;
use Domain\Inserts\InsertShape\Pipelines\Pipes\InsertShapeUpdatePipe;
use Domain\Shared\AbstractPipeline;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

final class InsertShapePipeline extends AbstractPipeline
{
    /**
     * @throws Throwable
     */
    public function store(array $data): InsertShape
    {
        try {
            DB::beginTransaction();

            $data = $this->pipeline
                ->send($data)
                ->through([
                    InsertShapeStorePipe::class
                ])
                ->thenReturn();

            DB::commit();

            return data_get($data, 'model');
        } catch (Exception | Throwable $e) {
            DB::rollBack();
            Log::error($e);

            throw ($e);
        }
    }

    /**
     * @throws Throwable
     */
    public function update(array $data, $id): void
    {
        try {
            DB::beginTransaction();

            $this->pipeline
                ->send(data_set($data,'id',$id))
                ->through([
                    InsertShapeUpdatePipe::class
                ])
                ->thenReturn();

            DB::commit();
        } catch (Exception | Throwable $e) {
            DB::rollBack();
            Log::error($e);

            throw ($e);
        }
    }

    /**
     * @throws Throwable
     */
    public function destroy(int $id): void
    {
        try {
            DB::beginTransaction();

            $this->pipeline
                ->send($id)
                ->through([
                    InsertShapeDestroyPipe::class
                ])
                ->thenReturn();

            DB::commit();
        } catch (Exception | Throwable $e) {
            DB::rollBack();
            Log::error($e);

            throw ($e);
        }
    }
}
