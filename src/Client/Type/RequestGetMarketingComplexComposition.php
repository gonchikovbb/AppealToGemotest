<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetMarketingComplexComposition implements RequestInterface
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
     * Constructor
     *
     * @var string $contractor
     * @var string $hash
     */
    public function __construct($contractor, $hash)
    {
        $this->contractor = $contractor;
        $this->hash = $hash;
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
     * @return RequestGetMarketingComplexComposition
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
     * @return RequestGetMarketingComplexComposition
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }
}

