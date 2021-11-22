<?php
namespace CarloNicora\Minimalism\Interfaces\Cache\Interfaces;

use CarloNicora\Minimalism\Interfaces\Cache\Enums\CacheType;

interface CacheBuilderInterface
{

    /**
     * @param CacheType $type
     */
    public function setType(CacheType $type): void;

    /**
     * @return int|string|null
     */
    public function getCacheIdentifier(): int|string|null;

    /**
     * @param int|string $identifier
     * @return void
     */
    public function setCacheIdentifier(int|string $identifier): void;

    /**
     * @return string
     */
    public function getCacheName(): string;

    /**
     * @return bool
     */
    public function getShouldInvalidateAllChildren(): bool;

    /**
     * @return bool
     */
    public function isSaveGranular(): bool;
}