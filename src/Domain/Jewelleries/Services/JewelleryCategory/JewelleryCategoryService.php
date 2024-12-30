<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Services\JewelleryCategory;

use Domain\AbstractCRUDService;
use Domain\Jewelleries\Repositories\jewelleryCategory\JewelleryCategoryRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class JewelleryCategoryService extends AbstractCRUDService
{
    public function __construct(
        public JewelleryCategoryRepositoryInterface $jewelleryCategoryRepositoryInterface,
//        public JewelleryPipeline $jewelleryPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->jewelleryCategoryRepositoryInterface->index($data);
    }

    public function store(array $data): Model
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Model
    {
        // TODO: Implement show() method.
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
