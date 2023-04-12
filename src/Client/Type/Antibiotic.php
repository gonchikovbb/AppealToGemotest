<?php

namespace App\Client\Type;

class Antibiotic
{
    /**
     * @var string
     */
    private $microbe_name;

    /**
     * @var string
     */
    private $antibiotic_name;

    /**
     * @var string
     */
    private $resistance_value;

    /**
     * @return string
     */
    public function getMicrobe_name()
    {
        return $this->microbe_name;
    }

    /**
     * @param string $microbe_name
     * @return Antibiotic
     */
    public function withMicrobe_name($microbe_name)
    {
        $new = clone $this;
        $new->microbe_name = $microbe_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getAntibiotic_name()
    {
        return $this->antibiotic_name;
    }

    /**
     * @param string $antibiotic_name
     * @return Antibiotic
     */
    public function withAntibiotic_name($antibiotic_name)
    {
        $new = clone $this;
        $new->antibiotic_name = $antibiotic_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getResistance_value()
    {
        return $this->resistance_value;
    }

    /**
     * @param string $resistance_value
     * @return Antibiotic
     */
    public function withResistance_value($resistance_value)
    {
        $new = clone $this;
        $new->resistance_value = $resistance_value;

        return $new;
    }
}

