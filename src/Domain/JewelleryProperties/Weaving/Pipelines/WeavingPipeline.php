<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Pipelines;

use Domain\JewelleryProperties\Weaving\Pipelines\Pipes\WeavingBraceletPropsCreateRelationshipsPipe;
use Domain\JewelleryProperties\Weaving\Pipelines\Pipes\WeavingBraceletPropWeavingsCreateRelationshipsPipe;
use Domain\JewelleryProperties\Weaving\Pipelines\Pipes\WeavingStorePipe;
use Domain\Shared\AbstractPipeline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

final class WeavingPipeline extends AbstractPipeline
{

    public function store(array $data): Model
    {
        try {
            DB::beginTransaction();

            $data = $this->pipeline
                ->send($data)
                ->through([
                    WeavingStorePipe::class,
//                    WeavingBraceletPropsCreateRelationshipsPipe::class,
                    WeavingBraceletPropWeavingsCreateRelationshipsPipe::class,
//                    WeavingChainPropsCreateRelationshipsPipe::class,
//                    WeavingChainPropWeavingsCreateRelationshipsPipe::class,
                ])
                ->thenReturn();

            DB::commit();

            return data_get($data, 'model');
        } catch (\Exception | \Throwable $e) {
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
