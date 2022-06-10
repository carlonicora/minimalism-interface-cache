<?php
namespace CarloNicora\Minimalism\Interfaces\Cache\Interfaces;

interface CacheIdentificatorsIteratorInterface
{
    /**
     * @param CacheIdentificatorCommandInterface $cacheIdentificator
     */
    public function addCacheIdentificator(CacheIdentificatorCommandInterface $cacheIdentificator): void;

    /**
     * @return array
     */
    public function getCacheIdentificators(): array;
}