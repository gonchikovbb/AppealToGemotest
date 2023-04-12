<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetOrderNumbers implements ResultInterface
{
    /**
     * @var int
     */
    private $orders_count;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \App\Client\Type\ErrorDescription
     */
    private $error_description;

    /**
     * @var \App\Client\Type\Order
     */
    private $orders;

    /**
     * @var \DateTimeInterface
     */
    private $order_date;

    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var \DateTimeInterface
     */
    private $from_date;

    /**
     * @var \DateTimeInterface
     */
    private $to_date;

    /**
     * @return int
     */
    public function getOrders_count()
    {
        return $this->orders_count;
    }

    /**
     * @param int $orders_count
     * @return ResponseGetOrderNumbers
     */
    public function withOrders_count($orders_count)
    {
        $new = clone $this;
        $new->orders_count = $orders_count;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseGetOrderNumbers
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
     * @return ResponseGetOrderNumbers
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return \App\Client\Type\Order
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param \App\Client\Type\Order $orders
     * @return ResponseGetOrderNumbers
     */
    public function withOrders($orders)
    {
        $new = clone $this;
        $new->orders = $orders;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOrder_date()
    {
        return $this->order_date;
    }

    /**
     * @param \DateTimeInterface $order_date
     * @return ResponseGetOrderNumbers
     */
    public function withOrder_date($order_date)
    {
        $new = clone $this;
        $new->order_date = $order_date;

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
     * @return ResponseGetOrderNumbers
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
     * @return ResponseGetOrderNumbers
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFrom_date()
    {
        return $this->from_date;
    }

    /**
     * @param \DateTimeInterface $from_date
     * @return ResponseGetOrderNumbers
     */
    public function withFrom_date($from_date)
    {
        $new = clone $this;
        $new->from_date = $from_date;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTo_date()
    {
        return $this->to_date;
    }

    /**
     * @param \DateTimeInterface $to_date
     * @return ResponseGetOrderNumbers
     */
    public function withTo_date($to_date)
    {
        $new = clone $this;
        $new->to_date = $to_date;

        return $new;
    }
}

