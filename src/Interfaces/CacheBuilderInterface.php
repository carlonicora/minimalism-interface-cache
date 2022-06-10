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

    /**
     * @param int $ttl
     * @return CacheBuilderInterface
     */
    public function withTtl(int $ttl): CacheBuilderInterface;

    /**
     * @param string $listName
     * @return CacheBuilderInterface
     */
    public function withList(string $listName): CacheBuilderInterface;

    /**
     * @param CacheType $type
     * @return CacheBuilderInterface
     */
    public function withType(CacheType $type): CacheBuilderInterface;

    /**
     * @param bool $saveGranular
     * @return CacheBuilderInterface
     */
    public function withGranularSaveOfChildren(bool $saveGranular): CacheBuilderInterface;

    /**
     * @param CacheIdentificatorsIteratorInterface $context
     * @return CacheBuilderInterface
     */
    public function withContexts(CacheIdentificatorsIteratorInterface $context): CacheBuilderInterface;

    /**
     * @param string $name
     * @param mixed|null $identifier
     * @return CacheBuilderInterface
     */
    public function addContext(string $name, mixed $identifier=null): CacheBuilderInterface;

    /**
     *
     */
    public function clearContexts(): void;

    /**
     * @return CacheBuilderInterface
     */
    public function forcingContextsOnGranularChildren(): CacheBuilderInterface;

    /**
     * @return CacheBuilderInterface
     */
    public function invalidateOnlyChildren(): CacheBuilderInterface;

    /**
     * @param CacheIdentificatorCommandInterface $cacheIdentifier
     */
    public function setFullCacheIdentifier(CacheIdentificatorCommandInterface $cacheIdentifier): void;

    /**
     * @param string $stringType
     */
    public function setTypeFromString(string $stringType): void;

    /**
     * @param int|null $ttl
     */
    public function setTtl(?int $ttl): void;

    /**
     * @param string|null $listName
     */
    public function setListName(?string $listName): void;

    /**
     * @param CacheIdentificatorsIteratorInterface $contexts
     */
    public function setContexts(CacheIdentificatorsIteratorInterface $contexts): void;

    /**
     * @return CacheType
     */
    public function getType(): CacheType;

    /**
     * @return int|null
     */
    public function getTtl(): ?int;

    /**
     * @return bool
     */
    public function isList(): bool;

    /**
     * @return string|null
     */
    public function getListName(): ?string;

    /**
     * @return CacheIdentificatorsIteratorInterface
     */
    public function getContexts(): CacheIdentificatorsIteratorInterface;
}