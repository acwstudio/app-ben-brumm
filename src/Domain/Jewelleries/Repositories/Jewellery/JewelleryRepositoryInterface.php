<?php

namespace Domain\Jewelleries\Repositories\Jewellery;

use Domain\Jewelleries\Models\Jewellery;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface JewelleryRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|Jewellery;
}
