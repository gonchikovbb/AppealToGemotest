<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetServicesSupplementals implements ResultInterface
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
     * @var \App\Client\Type\Supplemental
     */
    private $supplementals;

    /**
     * @var \App\Client\Type\Contingent
     */
    private $contingents;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseGetServicesSupplementals
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
     * @return ResponseGetServicesSupplementals
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return \App\Client\Type\Supplemental
     */
    public function getSupplementals()
    {
        return $this->supplementals;
    }

    /**
     * @param \App\Client\Type\Supplemental $supplementals
     * @return ResponseGetServicesSupplementals
     */
    public function withSupplementals($supplementals)
    {
        $new = clone $this;
        $new->supplementals = $supplementals;

        return $new;
    }

    /**
     * @return \App\Client\Type\Contingent
     */
    public function getContingents()
    {
        return $this->contingents;
    }

    /**
     * @param \App\Client\Type\Contingent $contingents
     * @return ResponseGetServicesSupplementals
     */
    public function withContingents($contingents)
    {
        $new = clone $this;
        $new->contingents = $contingents;

        return $new;
    }
}

