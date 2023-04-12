<?php

namespace App\Client\Type;

class OrderStatus
{
    /**
     * @var string
     */
    private $order_num;

    /**
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getOrder_num()
    {
        return $this->order_num;
    }

    /**
     * @param string $order_num
     * @return OrderStatus
     */
    public function withOrder_num($order_num)
    {
        $new = clone $this;
        $new->order_num = $order_num;

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
     * @return OrderStatus
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}

