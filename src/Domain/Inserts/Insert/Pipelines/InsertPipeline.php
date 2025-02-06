<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Pipelines;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertDestroyPipe;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertStorePipe;
use Domain\Inserts\Insert\Pipelines\Pipes\InsertUpdatePipe;
use Domain\Shared\AbstractPipeline;
use Exception;
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
                    InsertStorePipe::class
                ])
                ->thenReturn();

            DB::commit();

            return data_get($data, 'model');
        } catch (Exception|Throwable $e) {
            DB::rollBack();
            Log::error($e);

            throw ($e);
        }
    }

    /**
     * @throws Throwable
     */
    public function update(array $data, int $id): void
    {
        try {
            DB::beginTransaction();

            $this->pipeline
                ->send(data_set($data, 'id', $id))
                ->through([
                    InsertUpdatePipe::class
                ])
                ->thenReturn();

            DB::commit();
        } catch (Exception|\Throwable $e) {
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
                    InsertDestroyPipe::class
                ])
                ->thenReturn();

            DB::commit();
        } catch (Exception|Throwable $e) {
            DB::rollBack();
            Log::error($e);

            throw ($e);
        }
    }
}
