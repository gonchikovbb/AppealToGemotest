<?php

namespace App\Client\Type;

class OrderSample
{
    /**
     * @var \App\Client\Type\OrderSampleAliquot
     */
    private $aliquots;

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
     * @return \App\Client\Type\OrderSampleAliquot
     */
    public function getAliquots()
    {
        return $this->aliquots;
    }

    /**
     * @param \App\Client\Type\OrderSampleAliquot $aliquots
     * @return OrderSample
     */
    public function withAliquots($aliquots)
    {
        $new = clone $this;
        $new->aliquots = $aliquots;

        return $new;
    }

    /**
     * @return int
     */
    public function getSample_id()
    {
        return $this->sample_id;
    }

    /**
     * @param int $sample_id
     * @return OrderSample
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
     * @return OrderSample
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
     * @return OrderSample
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
     * @return OrderSample
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
     * @return OrderSample
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
     * @return OrderSample
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
     * @return OrderSample
     */
    public function withServices($services)
    {
        $new = clone $this;
        $new->services = $services;

        return $new;
    }
}

