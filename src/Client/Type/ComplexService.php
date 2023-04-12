<?php

namespace App\Client\Type;

class ComplexService
{
    /**
     * @var string
     */
    private $complex_id;

    /**
     * @var string
     */
    private $service_id;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var string
     */
    private $main_service;

    /**
     * @return string
     */
    public function getComplex_id()
    {
        return $this->complex_id;
    }

    /**
     * @param string $complex_id
     * @return ComplexService
     */
    public function withComplex_id($complex_id)
    {
        $new = clone $this;
        $new->complex_id = $complex_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getService_id()
    {
        return $this->service_id;
    }

    /**
     * @param string $service_id
     * @return ComplexService
     */
    public function withService_id($service_id)
    {
        $new = clone $this;
        $new->service_id = $service_id;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return ComplexService
     */
    public function withPrice($price)
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocalization_id()
    {
        return $this->localization_id;
    }

    /**
     * @param string $localization_id
     * @return ComplexService
     */
    public function withLocalization_id($localization_id)
    {
        $new = clone $this;
        $new->localization_id = $localization_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getBiomaterial_id()
    {
        return $this->biomaterial_id;
    }

    /**
     * @param string $biomaterial_id
     * @return ComplexService
     */
    public function withBiomaterial_id($biomaterial_id)
    {
        $new = clone $this;
        $new->biomaterial_id = $biomaterial_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransport_id()
    {
        return $this->transport_id;
    }

    /**
     * @param string $transport_id
     * @return ComplexService
     */
    public function withTransport_id($transport_id)
    {
        $new = clone $this;
        $new->transport_id = $transport_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getMain_service()
    {
        return $this->main_service;
    }

    /**
     * @param string $main_service
     * @return ComplexService
     */
    public function withMain_service($main_service)
    {
        $new = clone $this;
        $new->main_service = $main_service;

        return $new;
    }
}

