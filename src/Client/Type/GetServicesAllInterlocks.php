<?php

namespace App\Client\Type;

class GetServicesAllInterlocks
{
    /**
     * @var string
     */
    private $serv_id;

    /**
     * @var string
     */
    private $blocked_serv;

    /**
     * @return string
     */
    public function getServ_id()
    {
        return $this->serv_id;
    }

    /**
     * @param string $serv_id
     * @return GetServicesAllInterlocks
     */
    public function withServ_id($serv_id)
    {
        $new = clone $this;
        $new->serv_id = $serv_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getBlocked_serv()
    {
        return $this->blocked_serv;
    }

    /**
     * @param string $blocked_serv
     * @return GetServicesAllInterlocks
     */
    public function withBlocked_serv($blocked_serv)
    {
        $new = clone $this;
        $new->blocked_serv = $blocked_serv;

        return $new;
    }
}

