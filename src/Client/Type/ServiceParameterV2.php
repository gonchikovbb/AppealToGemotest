<?php

namespace App\Client\Type;

class ServiceParameterV2
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var int
     */
    private $sample_id;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $microbiology_biomaterial_id;

    /**
     * @var string
     */
    private $test_ids;

    /**
     * @var int
     */
    private $service_count;

    /**
     * @var int
     */
    private $primary_sample_id;

    /**
     * @return string
     */
    public function getService_id()
    {
        return $this->service_id;
    }

    /**
     * @param string $service_id
     * @return ServiceParameterV2
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
    public function getLocalization_id()
    {
        return $this->localization_id;
    }

    /**
     * @param string $localization_id
     * @return ServiceParameterV2
     */
    public function withLocalization_id($localization_id)
    {
        $new = clone $this;
        $new->localization_id = $localization_id;

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
     * @return ServiceParameterV2
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
     * @return ServiceParameterV2
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
    public function getMicrobiology_biomaterial_id()
    {
        return $this->microbiology_biomaterial_id;
    }

    /**
     * @param string $microbiology_biomaterial_id
     * @return ServiceParameterV2
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
    public function getTest_ids()
    {
        return $this->test_ids;
    }

    /**
     * @param string $test_ids
     * @return ServiceParameterV2
     */
    public function withTest_ids($test_ids)
    {
        $new = clone $this;
        $new->test_ids = $test_ids;

        return $new;
    }

    /**
     * @return int
     */
    public function getService_count()
    {
        return $this->service_count;
    }

    /**
     * @param int $service_count
     * @return ServiceParameterV2
     */
    public function withService_count($service_count)
    {
        $new = clone $this;
        $new->service_count = $service_count;

        return $new;
    }

    /**
     * @return int
     */
    public function getPrimary_sample_id()
    {
        return $this->primary_sample_id;
    }

    /**
     * @param int $primary_sample_id
     * @return ServiceParameterV2
     */
    public function withPrimary_sample_id($primary_sample_id)
    {
        $new = clone $this;
        $new->primary_sample_id = $primary_sample_id;

        return $new;
    }
}

