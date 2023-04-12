<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetMarketingComplexComposition implements ResultInterface
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
     * @var \App\Client\Type\ComplexService
     */
    private $complex_services;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseGetMarketingComplexComposition
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
     * @return ResponseGetMarketingComplexComposition
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return \App\Client\Type\ComplexService
     */
    public function getComplex_services()
    {
        return $this->complex_services;
    }

    /**
     * @param \App\Client\Type\ComplexService $complex_services
     * @return ResponseGetMarketingComplexComposition
     */
    public function withComplex_services($complex_services)
    {
        $new = clone $this;
        $new->complex_services = $complex_services;

        return $new;
    }
}

