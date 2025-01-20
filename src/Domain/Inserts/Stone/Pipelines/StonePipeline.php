<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Pipelines;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\Stone\Pipelines\Pipes\StoneDestroyPipe;
use Domain\Inserts\Stone\Pipelines\Pipes\StoneStorePipe;
use Domain\Inserts\Stone\Pipelines\Pipes\StoneUpdatePipe;
use Domain\Shared\AbstractPipeline;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

final class StonePipeline extends AbstractPipeline
{

    /**
     * @throws Throwable
     */
    public function store(array $data): Stone
    {
        try {
            DB::beginTransaction();

            $data = $this->pipeline
                ->send($data)
                ->through([
                    StoneStorePipe::class
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
                    StoneUpdatePipe::class
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
                    StoneDestroyPipe::class
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
