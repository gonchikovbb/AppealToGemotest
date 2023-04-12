<?php

namespace App\Client\Type;

class ResponseServiceAutoInsertItem
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $auto_insert_service_id;

    /**
     * @return string
     */
    public function getService_id()
    {
        return $this->service_id;
    }

    /**
     * @param string $service_id
     * @return ResponseServiceAutoInsertItem
     */
    public function withService_id($service_id)
    {
        $new = clone $this;
        $new->service_id = $service_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getAuto_insert_service_id()
    {
        return $this->auto_insert_service_id;
    }

    /**
     * @param string $auto_insert_service_id
     * @return ResponseServiceAutoInsertItem
     */
    public function withAuto_insert_service_id($auto_insert_service_id)
    {
        $new = clone $this;
        $new->auto_insert_service_id = $auto_insert_service_id;

        return $new;
    }
}

