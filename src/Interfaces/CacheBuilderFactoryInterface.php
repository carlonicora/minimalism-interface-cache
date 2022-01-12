<?php
namespace CarloNicora\Minimalism\Interfaces\Cache\Interfaces;

use CarloNicora\Minimalism\Interfaces\SimpleObjectInterface;

interface CacheBuilderFactoryInterface extends SimpleObjectInterface
{
    /**
     * @param string $cacheName
     * @param int|string $identifier
     * @return CacheBuilderInterface
     */
    public function create(
        string $cacheName,
        int|string $identifier
    ): CacheBuilderInterface;

    /**
     * @param string $key
     * @return CacheBuilderInterface
     */
    public function createFromKey(
        string $key
    ): CacheBuilderInterface;

    /**
     * @param string $listName
     * @param string $cacheName
     * @param int|string $identifier
     * @param bool $saveGranular
     * @return CacheBuilderInterface
     */
    public function createList(
        string $listName,
        string $cacheName,
        int|string $identifier,
        bool $saveGranular = true
    ): CacheBuilderInterface;
}