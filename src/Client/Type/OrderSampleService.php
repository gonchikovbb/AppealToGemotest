<?php

namespace App\Client\Type;

class OrderSampleService
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $complex_id;

    /**
     * @var bool
     */
    private $utilization_flag;

    /**
     * @var bool
     */
    private $refuse_flag;

    /**
     * @return string
     */
    public function getService_id()
    {
        return $this->service_id;
    }

    /**
     * @param string $service_id
     * @return OrderSampleService
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
    public function getComplex_id()
    {
        return $this->complex_id;
    }

    /**
     * @param string $complex_id
     * @return OrderSampleService
     */
    public function withComplex_id($complex_id)
    {
        $new = clone $this;
        $new->complex_id = $complex_id;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUtilization_flag()
    {
        return $this->utilization_flag;
    }

    /**
     * @param bool $utilization_flag
     * @return OrderSampleService
     */
    public function withUtilization_flag($utilization_flag)
    {
        $new = clone $this;
        $new->utilization_flag = $utilization_flag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRefuse_flag()
    {
        return $this->refuse_flag;
    }

    /**
     * @param bool $refuse_flag
     * @return OrderSampleService
     */
    public function withRefuse_flag($refuse_flag)
    {
        $new = clone $this;
        $new->refuse_flag = $refuse_flag;

        return $new;
    }
}

