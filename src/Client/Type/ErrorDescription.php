<?php

namespace App\Client\Type;

class ErrorDescription
{
    /**
     * @var int
     */
    private $error_code;

    /**
     * @var string
     */
    private $error_description;

    /**
     * @return int
     */
    public function getError_code()
    {
        return $this->error_code;
    }

    /**
     * @param int $error_code
     * @return ErrorDescription
     */
    public function withError_code($error_code)
    {
        $new = clone $this;
        $new->error_code = $error_code;

        return $new;
    }

    /**
     * @return string
     */
    public function getError_description()
    {
        return $this->error_description;
    }

    /**
     * @param string $error_description
     * @return ErrorDescription
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }
}

