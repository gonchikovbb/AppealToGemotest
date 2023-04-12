<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseCreateOrder implements ResultInterface
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
     * @var \App\Client\Type\Order
     */
    private $order;

    /**
     * @var \App\Client\Type\Barcode
     */
    private $barcodes;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseCreateOrder
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
     * @return ResponseCreateOrder
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
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param \App\Client\Type\Order $order
     * @return ResponseCreateOrder
     */
    public function withOrder($order)
    {
        $new = clone $this;
        $new->order = $order;

        return $new;
    }

    /**
     * @return \App\Client\Type\Barcode
     */
    public function getBarcodes()
    {
        return $this->barcodes;
    }

    /**
     * @param \App\Client\Type\Barcode $barcodes
     * @return ResponseCreateOrder
     */
    public function withBarcodes($barcodes)
    {
        $new = clone $this;
        $new->barcodes = $barcodes;

        return $new;
    }
}

