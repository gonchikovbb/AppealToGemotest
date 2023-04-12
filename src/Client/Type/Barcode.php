<?php

namespace App\Client\Type;

class Barcode
{
    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string
     */
    private $sample_description;

    /**
     * @var string
     */
    private $sample_id;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $biomaterial_name;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var string
     */
    private $localization_name;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var string
     */
    private $transport_name;

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return Barcode
     */
    public function withBarcode($barcode)
    {
        $new = clone $this;
        $new->barcode = $barcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getSample_description()
    {
        return $this->sample_description;
    }

    /**
     * @param string $sample_description
     * @return Barcode
     */
    public function withSample_description($sample_description)
    {
        $new = clone $this;
        $new->sample_description = $sample_description;

        return $new;
    }

    /**
     * @return string
     */
    public function getSample_id()
    {
        return $this->sample_id;
    }

    /**
     * @param string $sample_id
     * @return Barcode
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
    public function getBiomaterial_id()
    {
        return $this->biomaterial_id;
    }

    /**
     * @param string $biomaterial_id
     * @return Barcode
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
    public function getBiomaterial_name()
    {
        return $this->biomaterial_name;
    }

    /**
     * @param string $biomaterial_name
     * @return Barcode
     */
    public function withBiomaterial_name($biomaterial_name)
    {
        $new = clone $this;
        $new->biomaterial_name = $biomaterial_name;

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
     * @return Barcode
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
    public function getLocalization_name()
    {
        return $this->localization_name;
    }

    /**
     * @param string $localization_name
     * @return Barcode
     */
    public function withLocalization_name($localization_name)
    {
        $new = clone $this;
        $new->localization_name = $localization_name;

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
     * @return Barcode
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
    public function getTransport_name()
    {
        return $this->transport_name;
    }

    /**
     * @param string $transport_name
     * @return Barcode
     */
    public function withTransport_name($transport_name)
    {
        $new = clone $this;
        $new->transport_name = $transport_name;

        return $new;
    }
}

