<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Services;

use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Domain\JewelleryProperties\Weaving\Repositories\WeavingRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class WeavingService
{
    public function __construct(
        public WeavingRepository $weavingRepository,
//        public WeavingPipeline $weavingPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->weavingRepository->index($data);
    }

    public function show(int $id, array $data): Model|Weaving
    {
        // TODO: Implement show() method.
    }
}
