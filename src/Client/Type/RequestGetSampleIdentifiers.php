<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetSampleIdentifiers implements RequestInterface
{
    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $identifiers_count;

    /**
     * Constructor
     *
     * @var string $contractor
     * @var string $hash
     * @var int $identifiers_count
     */
    public function __construct($contractor, $hash, $identifiers_count)
    {
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->identifiers_count = $identifiers_count;
    }

    /**
     * @return string
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * @param string $contractor
     * @return RequestGetSampleIdentifiers
     */
    public function withContractor($contractor)
    {
        $new = clone $this;
        $new->contractor = $contractor;

        return $new;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return RequestGetSampleIdentifiers
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiers_count()
    {
        return $this->identifiers_count;
    }

    /**
     * @param int $identifiers_count
     * @return RequestGetSampleIdentifiers
     */
    public function withIdentifiers_count($identifiers_count)
    {
        $new = clone $this;
        $new->identifiers_count = $identifiers_count;

        return $new;
    }
}

