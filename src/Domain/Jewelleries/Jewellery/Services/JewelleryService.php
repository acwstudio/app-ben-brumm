<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Jewellery\Services;

use Domain\Jewelleries\Jewellery\Repositories\JewelleryRepositoryInterface;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class JewelleryService extends AbstractCRUDService
{
    public function __construct(
        public JewelleryRepositoryInterface $jewelleryRepositoryInterface,
//        public JewelleryPipeline $jewelleryPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->jewelleryRepositoryInterface->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        return $this->jewelleryRepositoryInterface->show($id, $data);
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
