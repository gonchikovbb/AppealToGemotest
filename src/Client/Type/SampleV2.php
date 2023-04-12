<?php

namespace App\Client\Type;

class SampleV2
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $utilize;

    /**
     * @var int
     */
    private $priority;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var string
     */
    private $sample_processing_rule_id;

    /**
     * @var string
     */
    private $utilization_type;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SampleV2
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return SampleV2
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUtilize()
    {
        return $this->utilize;
    }

    /**
     * @param bool $utilize
     * @return SampleV2
     */
    public function withUtilize($utilize)
    {
        $new = clone $this;
        $new->utilize = $utilize;

        return $new;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return SampleV2
     */
    public function withPriority($priority)
    {
        $new = clone $this;
        $new->priority = $priority;

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
     * @return SampleV2
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
    public function getSample_processing_rule_id()
    {
        return $this->sample_processing_rule_id;
    }

    /**
     * @param string $sample_processing_rule_id
     * @return SampleV2
     */
    public function withSample_processing_rule_id($sample_processing_rule_id)
    {
        $new = clone $this;
        $new->sample_processing_rule_id = $sample_processing_rule_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getUtilization_type()
    {
        return $this->utilization_type;
    }

    /**
     * @param string $utilization_type
     * @return SampleV2
     */
    public function withUtilization_type($utilization_type)
    {
        $new = clone $this;
        $new->utilization_type = $utilization_type;

        return $new;
    }
}

