<?php

declare(strict_types=1);

namespace Domain\Jewelleries\JewelleryCategory\Repositories;

use Domain\Jewelleries\JewelleryCategory\Models\JewelleryCategory;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface JewelleryCategoryRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|JewelleryCategory;
}
