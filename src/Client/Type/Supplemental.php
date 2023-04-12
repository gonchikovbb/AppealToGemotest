<?php

namespace App\Client\Type;

class Supplemental
{
    /**
     * @var string
     */
    private $parent_id;

    /**
     * @var string
     */
    private $test_id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var bool
     */
    private $required;

    /**
     * @return string
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return Supplemental
     */
    public function withParent_id($parent_id)
    {
        $new = clone $this;
        $new->parent_id = $parent_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getTest_id()
    {
        return $this->test_id;
    }

    /**
     * @param string $test_id
     * @return Supplemental
     */
    public function withTest_id($test_id)
    {
        $new = clone $this;
        $new->test_id = $test_id;

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
     * @return Supplemental
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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Supplemental
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return Supplemental
     */
    public function withRequired($required)
    {
        $new = clone $this;
        $new->required = $required;

        return $new;
    }
}

