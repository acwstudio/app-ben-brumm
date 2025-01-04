<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Resources;

use Domain\Inserts\Models\Insert;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @mixin Insert */
final class InsertCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
