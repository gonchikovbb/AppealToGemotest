<?php

namespace App\Client\Type;

class Microbe
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $norma;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Microbe
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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Microbe
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
    public function getNorma()
    {
        return $this->norma;
    }

    /**
     * @param string $norma
     * @return Microbe
     */
    public function withNorma($norma)
    {
        $new = clone $this;
        $new->norma = $norma;

        return $new;
    }
}

