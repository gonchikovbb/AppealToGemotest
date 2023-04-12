<?php

namespace App\Client\Type;

class ResponseGetTest
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $test_id;

    /**
     * @var string
     */
    private $test_name;

    /**
     * @return string
     */
    public function getService_id()
    {
        return $this->service_id;
    }

    /**
     * @param string $service_id
     * @return ResponseGetTest
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
    public function getTest_id()
    {
        return $this->test_id;
    }

    /**
     * @param string $test_id
     * @return ResponseGetTest
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
    public function getTest_name()
    {
        return $this->test_name;
    }

    /**
     * @param string $test_name
     * @return ResponseGetTest
     */
    public function withTest_name($test_name)
    {
        $new = clone $this;
        $new->test_name = $test_name;

        return $new;
    }
}

