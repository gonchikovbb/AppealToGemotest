<?php

namespace App\Client\Type;

class AdditionalTests
{
    /**
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return AdditionalTests
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}

