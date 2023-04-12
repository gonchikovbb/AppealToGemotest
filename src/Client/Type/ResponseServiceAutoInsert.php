<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseServiceAutoInsert implements ResultInterface
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
     * @var \App\Client\Type\ResponseServiceAutoInsertItem
     */
    private $service_auto_insert_item;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseServiceAutoInsert
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
     * @return ResponseServiceAutoInsert
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return \App\Client\Type\ResponseServiceAutoInsertItem
     */
    public function getService_auto_insert_item()
    {
        return $this->service_auto_insert_item;
    }

    /**
     * @param \App\Client\Type\ResponseServiceAutoInsertItem $service_auto_insert_item
     * @return ResponseServiceAutoInsert
     */
    public function withService_auto_insert_item($service_auto_insert_item)
    {
        $new = clone $this;
        $new->service_auto_insert_item = $service_auto_insert_item;

        return $new;
    }
}

