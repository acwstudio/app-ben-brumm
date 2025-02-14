<?php

declare(strict_types=1);

namespace Domain\Views\JewelleryViews\Repositories;

use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface JewelleryViewRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|JewelleryView;
}
