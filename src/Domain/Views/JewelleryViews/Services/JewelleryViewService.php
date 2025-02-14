<?php

declare(strict_types=1);

namespace Domain\Views\JewelleryViews\Services;

use Domain\Views\JewelleryViews\Repositories\JewelleryViewRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class JewelleryViewService
{
    public function __construct(
        public JewelleryViewRepositoryInterface $jewelleryViewRepositoryInterface
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->jewelleryViewRepositoryInterface->index($data);
    }

    public function show(array $data, int $id): Model
    {
        return $this->jewelleryViewRepositoryInterface->show($id, $data);
    }
}
