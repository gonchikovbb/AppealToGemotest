<?php

namespace App\Client\Type;

class ResultsMb
{
    /**
     * @var \App\Client\Type\ServiceMb
     */
    private $service_mb;

    /**
     * @return \App\Client\Type\ServiceMb
     */
    public function getService_mb()
    {
        return $this->service_mb;
    }

    /**
     * @param \App\Client\Type\ServiceMb $service_mb
     * @return ResultsMb
     */
    public function withService_mb($service_mb)
    {
        $new = clone $this;
        $new->service_mb = $service_mb;

        return $new;
    }
}

