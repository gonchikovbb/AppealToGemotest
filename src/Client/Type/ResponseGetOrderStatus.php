<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetOrderStatus implements ResultInterface
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var \App\Client\Type\OrderStatus
     */
    private $order_statuses;

    /**
     * @var \App\Client\Type\ErrorDescription
     */
    private $error_description;

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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseGetOrderStatus
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return \App\Client\Type\OrderStatus
     */
    public function getOrder_statuses()
    {
        return $this->order_statuses;
    }

    /**
     * @param \App\Client\Type\OrderStatus $order_statuses
     * @return ResponseGetOrderStatus
     */
    public function withOrder_statuses($order_statuses)
    {
        $new = clone $this;
        $new->order_statuses = $order_statuses;

        return $new;
    }

    /**
     * @return \App\Client\Type\ErrorDescription
     */
    public function getError_description()
    {
        return $this->error_description;
    }

    /**
     * @param \App\Client\Type\ErrorDescription $error_description
     * @return ResponseGetOrderStatus
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
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
     * @return ResponseGetOrderStatus
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
     * @return ResponseGetOrderStatus
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
     * @return ResponseGetOrderStatus
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }
}

