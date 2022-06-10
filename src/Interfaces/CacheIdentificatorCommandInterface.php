<?php
namespace CarloNicora\Minimalism\Interfaces\Cache\Interfaces;

interface CacheIdentificatorCommandInterface
{
    /**
     * CacheIdentificationCommand constructor.
     * @param string $name
     * @param $identifier
     */
    public function __construct(string $name, $identifier=null);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int|string|null
     */
    public function getIdentifier(): int|string|null;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @param int|string $identifier
     */
    public function setIdentifier(int|string $identifier): void;
}