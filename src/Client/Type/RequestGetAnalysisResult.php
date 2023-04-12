<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetAnalysisResult implements RequestInterface
{
    /**
     * @var string
     */
    private $order_num;

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
     * Constructor
     *
     * @var string $order_num
     * @var string $ext_num
     * @var string $contractor
     * @var string $hash
     */
    public function __construct($order_num, $ext_num, $contractor, $hash)
    {
        $this->order_num = $order_num;
        $this->ext_num = $ext_num;
        $this->contractor = $contractor;
        $this->hash = $hash;
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
     * @return RequestGetAnalysisResult
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
    public function getExt_num()
    {
        return $this->ext_num;
    }

    /**
     * @param string $ext_num
     * @return RequestGetAnalysisResult
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
     * @return RequestGetAnalysisResult
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
     * @return RequestGetAnalysisResult
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }
}

