<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetOrdersResults implements ResultInterface
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var \App\Client\Type\ErrorDescription
     */
    private $error_description;

    /**
     * @var \App\Client\Type\OrderResult
     */
    private $order_results;

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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseGetOrdersResults
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

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
     * @return ResponseGetOrdersResults
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return \App\Client\Type\OrderResult
     */
    public function getOrder_results()
    {
        return $this->order_results;
    }

    /**
     * @param \App\Client\Type\OrderResult $order_results
     * @return ResponseGetOrdersResults
     */
    public function withOrder_results($order_results)
    {
        $new = clone $this;
        $new->order_results = $order_results;

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
     * @return ResponseGetOrdersResults
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
     * @return ResponseGetOrdersResults
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
     * @return ResponseGetOrdersResults
     */
    public function withOrders($orders)
    {
        $new = clone $this;
        $new->orders = $orders;

        return $new;
    }
}

