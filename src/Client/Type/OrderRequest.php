<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrderRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $ext_num;

    /**
     * @var string
     */
    private $order_num;

    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var \App\Client\Type\Patient
     */
    private $patient;

    /**
     * Constructor
     *
     * @var string $ext_num
     * @var string $order_num
     * @var string $contractor
     * @var string $hash
     * @var \App\Client\Type\Patient $patient
     */
    public function __construct($ext_num, $order_num, $contractor, $hash, $patient)
    {
        $this->ext_num = $ext_num;
        $this->order_num = $order_num;
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->patient = $patient;
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
     * @return OrderRequest
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
    public function getOrder_num()
    {
        return $this->order_num;
    }

    /**
     * @param string $order_num
     * @return OrderRequest
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
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * @param string $contractor
     * @return OrderRequest
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
     * @return OrderRequest
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    /**
     * @return \App\Client\Type\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param \App\Client\Type\Patient $patient
     * @return OrderRequest
     */
    public function withPatient($patient)
    {
        $new = clone $this;
        $new->patient = $patient;

        return $new;
    }
}

