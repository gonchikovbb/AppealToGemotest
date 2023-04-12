<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetOrdersResults implements RequestInterface
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
     * @var string
     */
    private $orders;

    /**
     * Constructor
     *
     * @var string $contractor
     * @var string $hash
     * @var string $orders
     */
    public function __construct($contractor, $hash, $orders)
    {
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->orders = $orders;
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
     * @return RequestGetOrdersResults
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
     * @return RequestGetOrdersResults
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param string $orders
     * @return RequestGetOrdersResults
     */
    public function withOrders($orders)
    {
        $new = clone $this;
        $new->orders = $orders;

        return $new;
    }
}

