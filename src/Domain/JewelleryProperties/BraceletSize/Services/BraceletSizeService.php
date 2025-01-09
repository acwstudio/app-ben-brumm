<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletSize\Services;

use Domain\JewelleryProperties\BraceletSize\Pipelines\BraceletSizePipeline;
use Domain\JewelleryProperties\BraceletSize\Repositories\BraceletSizeRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class BraceletSizeService  extends AbstractCRUDService
{
    public function __construct(
        public BraceletSizeRepository $braceletSizeRepository,
        public BraceletSizePipeline $braceletSizePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->braceletSizeRepository->index($data);
    }

    public function store(array $data): Model
    {

    }

    public function show(int $id, array $data): Model
    {
        return $this->braceletSizeRepository->show($id, $data);
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
