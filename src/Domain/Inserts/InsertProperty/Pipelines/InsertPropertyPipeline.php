<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Pipelines;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertProperty\Pipelines\Pipes\InsertPropertyDestroyPipe;
use Domain\Inserts\InsertProperty\Pipelines\Pipes\InsertPropertyStorePipe;
use Domain\Inserts\InsertProperty\Pipelines\Pipes\InsertPropertyUpdatePipe;
use Domain\Shared\AbstractPipeline;
use Exception;
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
        } catch (Exception | Throwable $e) {
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
                ->send(data_set($data,'id',$id))
                ->through([
                    InsertPropertyUpdatePipe::class
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
                    InsertPropertyDestroyPipe::class
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
