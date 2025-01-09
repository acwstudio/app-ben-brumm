<?php

declare(strict_types=1);

namespace Domain\Shared;

abstract class AbstractCachedRepository
{
    protected const CACHE_TTL_SECONDS = 2000;

    protected function getCacheKey(array $params): string
    {
        $type = static::class;

        $query = $type . json_encode($params);

        return hash('sha256', $query);
    }

    protected function getTtl(): int
    {
        return self::CACHE_TTL_SECONDS;
    }

    protected function getShortClassName(): bool|string
    {
        $explodedClassName = explode('\\', static::class);

        return end($explodedClassName);
    }
}
