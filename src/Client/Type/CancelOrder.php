<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelOrder implements RequestInterface
{
    /**
     * @var int
     */
    private $order_status;

    /**
     * @var string
     */
    private $ext_num;

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
    private $order_num;

    /**
     * Constructor
     *
     * @var int $order_status
     * @var string $ext_num
     * @var string $contractor
     * @var string $hash
     * @var string $order_num
     */
    public function __construct($order_status, $ext_num, $contractor, $hash, $order_num)
    {
        $this->order_status = $order_status;
        $this->ext_num = $ext_num;
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->order_num = $order_num;
    }

    /**
     * @return int
     */
    public function getOrder_status()
    {
        return $this->order_status;
    }

    /**
     * @param int $order_status
     * @return CancelOrder
     */
    public function withOrder_status($order_status)
    {
        $new = clone $this;
        $new->order_status = $order_status;

        return $new;
    }

    /**
     * @return string
     */
    public function getExt_num()
    {
        return $this->ext_num;
    }

    /**
     * @param string $ext_num
     * @return CancelOrder
     */
    public function withExt_num($ext_num)
    {
        $new = clone $this;
        $new->ext_num = $ext_num;

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
     * @return CancelOrder
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
     * @return CancelOrder
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
    public function getOrder_num()
    {
        return $this->order_num;
    }

    /**
     * @param string $order_num
     * @return CancelOrder
     */
    public function withOrder_num($order_num)
    {
        $new = clone $this;
        $new->order_num = $order_num;

        return $new;
    }
}

