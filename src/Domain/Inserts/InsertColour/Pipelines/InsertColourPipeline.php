<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Pipelines;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertColour\Pipelines\Pipes\InsertColourDestroyPipe;
use Domain\Inserts\InsertColour\Pipelines\Pipes\InsertColourStorePipe;
use Domain\Inserts\InsertColour\Pipelines\Pipes\InsertColourUpdatePipe;
use Domain\Shared\AbstractPipeline;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

final class InsertColourPipeline extends AbstractPipeline
{

    /**
     * @throws Throwable
     */
    public function store(array $data): InsertColour
    {
        try {
            DB::beginTransaction();

            $data = $this->pipeline
                ->send($data)
                ->through([
                    InsertColourStorePipe::class
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
                    InsertColourUpdatePipe::class
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
                    InsertColourDestroyPipe::class
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
