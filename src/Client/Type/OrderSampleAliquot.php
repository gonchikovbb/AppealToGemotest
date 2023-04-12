<?php

namespace App\Client\Type;

class OrderSampleAliquot
{
    /**
     * @var int
     */
    private $sample_id;

    /**
     * @var string
     */
    private $sample_identifier;

    /**
     * @var string
     */
    private $microbiology_biomaterial_id;

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
     * @var \App\Client\Type\OrderSampleService
     */
    private $services;

    /**
     * @return int
     */
    public function getSample_id()
    {
        return $this->sample_id;
    }

    /**
     * @param int $sample_id
     * @return OrderSampleAliquot
     */
    public function withSample_id($sample_id)
    {
        $new = clone $this;
        $new->sample_id = $sample_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getSample_identifier()
    {
        return $this->sample_identifier;
    }

    /**
     * @param string $sample_identifier
     * @return OrderSampleAliquot
     */
    public function withSample_identifier($sample_identifier)
    {
        $new = clone $this;
        $new->sample_identifier = $sample_identifier;

        return $new;
    }

    /**
     * @return string
     */
    public function getMicrobiology_biomaterial_id()
    {
        return $this->microbiology_biomaterial_id;
    }

    /**
     * @param string $microbiology_biomaterial_id
     * @return OrderSampleAliquot
     */
    public function withMicrobiology_biomaterial_id($microbiology_biomaterial_id)
    {
        $new = clone $this;
        $new->microbiology_biomaterial_id = $microbiology_biomaterial_id;

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
     * @return OrderSampleAliquot
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
     * @return OrderSampleAliquot
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
     * @return OrderSampleAliquot
     */
    public function withTransport_id($transport_id)
    {
        $new = clone $this;
        $new->transport_id = $transport_id;

        return $new;
    }

    /**
     * @return \App\Client\Type\OrderSampleService
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param \App\Client\Type\OrderSampleService $services
     * @return OrderSampleAliquot
     */
    public function withServices($services)
    {
        $new = clone $this;
        $new->services = $services;

        return $new;
    }
}

