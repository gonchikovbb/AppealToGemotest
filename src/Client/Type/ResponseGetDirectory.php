<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetDirectory implements ResultInterface
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
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $description_directory;

    /**
     * @var \App\Client\Type\Service
     */
    private $service;

    /**
     * @var \App\Client\Type\Services
     */
    private $services;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ResponseGetDirectory
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
     * @return ResponseGetDirectory
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

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
     * @return ResponseGetDirectory
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
    public function getDescription_directory()
    {
        return $this->description_directory;
    }

    /**
     * @param string $description_directory
     * @return ResponseGetDirectory
     */
    public function withDescription_directory($description_directory)
    {
        $new = clone $this;
        $new->description_directory = $description_directory;

        return $new;
    }

    /**
     * @return \App\Client\Type\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param \App\Client\Type\Service $service
     * @return ResponseGetDirectory
     */
    public function withService($service)
    {
        $new = clone $this;
        $new->service = $service;

        return $new;
    }

    /**
     * @return \App\Client\Type\Services
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param \App\Client\Type\Services $services
     * @return ResponseGetDirectory
     */
    public function withServices($services)
    {
        $new = clone $this;
        $new->services = $services;

        return $new;
    }
}

