<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetOrderStatus implements RequestInterface
{
    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $orders;

    /**
     * @var string
     */
    private $hash;

    /**
     * Constructor
     *
     * @var string $contractor
     * @var string $orders
     * @var string $hash
     */
    public function __construct($contractor, $orders, $hash)
    {
        $this->contractor = $contractor;
        $this->orders = $orders;
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
     * @return RequestGetOrderStatus
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
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param string $orders
     * @return RequestGetOrderStatus
     */
    public function withOrders($orders)
    {
        $new = clone $this;
        $new->orders = $orders;

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
     * @return RequestGetOrderStatus
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }
}

