<?php
namespace CarloNicora\Minimalism\Interfaces\Cache\Abstracts;

use CarloNicora\Minimalism\Interfaces\Cache\Interfaces\CacheBuilderFactoryInterface;
use CarloNicora\Minimalism\Interfaces\Cache\Interfaces\CacheBuilderInterface;
use CarloNicora\Minimalism\Interfaces\Cache\Interfaces\CacheInterface;

abstract class AbstractCacheBuilderFactory implements CacheBuilderFactoryInterface
{
    /** @var CacheInterface  */
    private static CacheInterface $cache;

    /**
     * @param CacheInterface $cache
     * @return void
     */
    public static function setCacheInterface(
        CacheInterface $cache,
    ): void
    {
        self::$cache = $cache;
    }

    /**
     * @param string $cacheName
     * @param $identifier
     * @return CacheBuilderInterface|null
     */
    public static function create(
        string $cacheName,
               $identifier
    ): ?CacheBuilderInterface
    {
        if (!isset(self::$cache)){
            return null;
        }

        /** @var CacheBuilderFactoryInterface $implementationClass */
        $implementationClass = self::$cache->getBuilderFactory(__CLASS__);
        return $implementationClass::create($cacheName, $identifier);
    }

    /**
     * @param string $key
     * @return CacheBuilderInterface
     */
    public static function createFromKey(
        string $key
    ): CacheBuilderInterface
    {
        /** @var CacheBuilderFactoryInterface $implementationClass */
        $implementationClass = self::$cache->getBuilderFactory(__CLASS__);
        return $implementationClass::createFromKey($key);
    }

    /**
     * @param string $listName
     * @param string $cacheName
     * @param $identifier
     * @param bool $saveGranular
     * @return CacheBuilderInterface
     */
    public static function createList(
        string $listName,
        string $cacheName,
               $identifier,
        bool $saveGranular=true
    ): CacheBuilderInterface
    {
        /** @var CacheBuilderFactoryInterface $implementationClass */
        $implementationClass = self::$cache->getBuilderFactory(__CLASS__);
        return $implementationClass::createList($listName, $cacheName, $identifier, $saveGranular);
    }
}