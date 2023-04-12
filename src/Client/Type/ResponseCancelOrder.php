<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseCancelOrder implements ResultInterface
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
     * @var \App\Client\Type\CancelOrder
     */
    private $cancel_order;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseCancelOrder
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
     * @return ResponseCancelOrder
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return \App\Client\Type\CancelOrder
     */
    public function getCancel_order()
    {
        return $this->cancel_order;
    }

    /**
     * @param \App\Client\Type\CancelOrder $cancel_order
     * @return ResponseCancelOrder
     */
    public function withCancel_order($cancel_order)
    {
        $new = clone $this;
        $new->cancel_order = $cancel_order;

        return $new;
    }
}

