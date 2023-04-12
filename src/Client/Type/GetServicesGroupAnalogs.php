<?php

namespace App\Client\Type;

class GetServicesGroupAnalogs
{
    /**
     * @var string
     */
    private $serv_id;

    /**
     * @var string
     */
    private $group_id;

    /**
     * @return string
     */
    public function getServ_id()
    {
        return $this->serv_id;
    }

    /**
     * @param string $serv_id
     * @return GetServicesGroupAnalogs
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
    public function getGroup_id()
    {
        return $this->group_id;
    }

    /**
     * @param string $group_id
     * @return GetServicesGroupAnalogs
     */
    public function withGroup_id($group_id)
    {
        $new = clone $this;
        $new->group_id = $group_id;

        return $new;
    }
}

