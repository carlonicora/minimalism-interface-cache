<?php
namespace CarloNicora\Minimalism\Interfaces\Cache\Interfaces;

use CarloNicora\Minimalism\Interfaces\Cache\Enums\CacheType;
use CarloNicora\Minimalism\Interfaces\ServiceInterface;

interface CacheInterface extends ServiceInterface
{
    /**
     * @return CacheBuilderFactoryInterface
     */
    public function getCacheBuilderFactory(): CacheBuilderFactoryInterface;

    /**
     * @return bool
     */
    public function useCaching(): bool;

    /**
     * @param CacheBuilderInterface $builder
     * @param string $data
     * @param CacheType $cacheBuilderType
     */
    public function save(CacheBuilderInterface $builder, string $data, CacheType $cacheBuilderType): void;

    /**
     * @param CacheBuilderInterface $builder
     * @param array $data
     * @param CacheType $cacheBuilderType
     */
    public function saveArray(CacheBuilderInterface $builder, array $data, CacheType $cacheBuilderType): void;

    /**
     * @param CacheBuilderInterface $builder
     * @param CacheType $cacheBuilderType
     * @return string|null
     */
    public function read(CacheBuilderInterface $builder, CacheType $cacheBuilderType): ?string;

    /**
     * @param CacheBuilderInterface $builder
     * @param CacheType $cacheBuilderType
     * @return array|null
     */
    public function readArray(CacheBuilderInterface $builder, CacheType $cacheBuilderType): ?array;

    /**
     * @param CacheBuilderInterface $builder
     */
    public function invalidate(CacheBuilderInterface $builder): void;
}