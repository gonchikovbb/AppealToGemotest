<?php

namespace App\Client\Type;

class ResultsCl
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $test_rusname;

    /**
     * @var string
     */
    private $section_name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $measurement_unit;

    /**
     * @var string
     */
    private $ref_min;

    /**
     * @var string
     */
    private $ref_max;

    /**
     * @var string
     */
    private $ref_range;

    /**
     * @var string
     */
    private $ref_text;

    /**
     * @var int
     */
    private $status_cl;

    /**
     * @var \DateTimeInterface
     */
    private $result_date;

    /**
     * @var int
     */
    private $test_system_code;

    /**
     * @var string
     */
    private $test_system_name;

    /**
     * @var \DateTimeInterface
     */
    private $test_system_date;

    /**
     * @var int
     */
    private $test_system_series;

    /**
     * @var string
     */
    private $service_id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ResultsCl
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
     * @return ResultsCl
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getTest_rusname()
    {
        return $this->test_rusname;
    }

    /**
     * @param string $test_rusname
     * @return ResultsCl
     */
    public function withTest_rusname($test_rusname)
    {
        $new = clone $this;
        $new->test_rusname = $test_rusname;

        return $new;
    }

    /**
     * @return string
     */
    public function getSection_name()
    {
        return $this->section_name;
    }

    /**
     * @param string $section_name
     * @return ResultsCl
     */
    public function withSection_name($section_name)
    {
        $new = clone $this;
        $new->section_name = $section_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ResultsCl
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return string
     */
    public function getMeasurement_unit()
    {
        return $this->measurement_unit;
    }

    /**
     * @param string $measurement_unit
     * @return ResultsCl
     */
    public function withMeasurement_unit($measurement_unit)
    {
        $new = clone $this;
        $new->measurement_unit = $measurement_unit;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef_min()
    {
        return $this->ref_min;
    }

    /**
     * @param string $ref_min
     * @return ResultsCl
     */
    public function withRef_min($ref_min)
    {
        $new = clone $this;
        $new->ref_min = $ref_min;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef_max()
    {
        return $this->ref_max;
    }

    /**
     * @param string $ref_max
     * @return ResultsCl
     */
    public function withRef_max($ref_max)
    {
        $new = clone $this;
        $new->ref_max = $ref_max;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef_range()
    {
        return $this->ref_range;
    }

    /**
     * @param string $ref_range
     * @return ResultsCl
     */
    public function withRef_range($ref_range)
    {
        $new = clone $this;
        $new->ref_range = $ref_range;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef_text()
    {
        return $this->ref_text;
    }

    /**
     * @param string $ref_text
     * @return ResultsCl
     */
    public function withRef_text($ref_text)
    {
        $new = clone $this;
        $new->ref_text = $ref_text;

        return $new;
    }

    /**
     * @return int
     */
    public function getStatus_cl()
    {
        return $this->status_cl;
    }

    /**
     * @param int $status_cl
     * @return ResultsCl
     */
    public function withStatus_cl($status_cl)
    {
        $new = clone $this;
        $new->status_cl = $status_cl;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getResult_date()
    {
        return $this->result_date;
    }

    /**
     * @param \DateTimeInterface $result_date
     * @return ResultsCl
     */
    public function withResult_date($result_date)
    {
        $new = clone $this;
        $new->result_date = $result_date;

        return $new;
    }

    /**
     * @return int
     */
    public function getTest_system_code()
    {
        return $this->test_system_code;
    }

    /**
     * @param int $test_system_code
     * @return ResultsCl
     */
    public function withTest_system_code($test_system_code)
    {
        $new = clone $this;
        $new->test_system_code = $test_system_code;

        return $new;
    }

    /**
     * @return string
     */
    public function getTest_system_name()
    {
        return $this->test_system_name;
    }

    /**
     * @param string $test_system_name
     * @return ResultsCl
     */
    public function withTest_system_name($test_system_name)
    {
        $new = clone $this;
        $new->test_system_name = $test_system_name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTest_system_date()
    {
        return $this->test_system_date;
    }

    /**
     * @param \DateTimeInterface $test_system_date
     * @return ResultsCl
     */
    public function withTest_system_date($test_system_date)
    {
        $new = clone $this;
        $new->test_system_date = $test_system_date;

        return $new;
    }

    /**
     * @return int
     */
    public function getTest_system_series()
    {
        return $this->test_system_series;
    }

    /**
     * @param int $test_system_series
     * @return ResultsCl
     */
    public function withTest_system_series($test_system_series)
    {
        $new = clone $this;
        $new->test_system_series = $test_system_series;

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
     * @return ResultsCl
     */
    public function withService_id($service_id)
    {
        $new = clone $this;
        $new->service_id = $service_id;

        return $new;
    }
}

