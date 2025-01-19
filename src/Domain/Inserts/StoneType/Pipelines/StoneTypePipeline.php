<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Pipelines;

use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Inserts\StoneType\Pipelines\Pipes\StoneTypeStonesUpdateRelationsPipe;
use Domain\Inserts\StoneType\Pipelines\Pipes\StoneTypeStorePipe;
use Domain\Inserts\StoneType\Pipelines\Pipes\StoneTypeUpdatePipe;
use Domain\Shared\AbstractPipeline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

final class StoneTypePipeline extends AbstractPipeline
{

    /**
     * @throws Throwable
     */
    public function store(array $data): StoneType
    {
        try {
            DB::beginTransaction();

            $data = $this->pipeline
                ->send($data)
                ->through([
                    StoneTypeStorePipe::class,
                    StoneTypeStonesUpdateRelationsPipe::class
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
                    StoneTypeUpdatePipe::class
                ])
                ->thenReturn();

            DB::commit();
        } catch (\Exception | \Throwable $e) {
            DB::rollBack();
            Log::error($e);

            throw ($e);
        }
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
