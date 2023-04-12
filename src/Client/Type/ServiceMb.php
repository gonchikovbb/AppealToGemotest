<?php

namespace App\Client\Type;

class ServiceMb
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
    private $mat_id;

    /**
     * @var string
     */
    private $mat_name;

    /**
     * @var string
     */
    private $loc_id;

    /**
     * @var string
     */
    private $loc_name;

    /**
     * @var int
     */
    private $status_mb;

    /**
     * @var \App\Client\Type\Microbe
     */
    private $microbe;

    /**
     * @var \App\Client\Type\Antibiotic
     */
    private $antibiotic;

    /**
     * @var \DateTimeInterface
     */
    private $result_date;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ServiceMb
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
     * @return ServiceMb
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
    public function getMat_id()
    {
        return $this->mat_id;
    }

    /**
     * @param string $mat_id
     * @return ServiceMb
     */
    public function withMat_id($mat_id)
    {
        $new = clone $this;
        $new->mat_id = $mat_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getMat_name()
    {
        return $this->mat_name;
    }

    /**
     * @param string $mat_name
     * @return ServiceMb
     */
    public function withMat_name($mat_name)
    {
        $new = clone $this;
        $new->mat_name = $mat_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getLoc_id()
    {
        return $this->loc_id;
    }

    /**
     * @param string $loc_id
     * @return ServiceMb
     */
    public function withLoc_id($loc_id)
    {
        $new = clone $this;
        $new->loc_id = $loc_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getLoc_name()
    {
        return $this->loc_name;
    }

    /**
     * @param string $loc_name
     * @return ServiceMb
     */
    public function withLoc_name($loc_name)
    {
        $new = clone $this;
        $new->loc_name = $loc_name;

        return $new;
    }

    /**
     * @return int
     */
    public function getStatus_mb()
    {
        return $this->status_mb;
    }

    /**
     * @param int $status_mb
     * @return ServiceMb
     */
    public function withStatus_mb($status_mb)
    {
        $new = clone $this;
        $new->status_mb = $status_mb;

        return $new;
    }

    /**
     * @return \App\Client\Type\Microbe
     */
    public function getMicrobe()
    {
        return $this->microbe;
    }

    /**
     * @param \App\Client\Type\Microbe $microbe
     * @return ServiceMb
     */
    public function withMicrobe($microbe)
    {
        $new = clone $this;
        $new->microbe = $microbe;

        return $new;
    }

    /**
     * @return \App\Client\Type\Antibiotic
     */
    public function getAntibiotic()
    {
        return $this->antibiotic;
    }

    /**
     * @param \App\Client\Type\Antibiotic $antibiotic
     * @return ServiceMb
     */
    public function withAntibiotic($antibiotic)
    {
        $new = clone $this;
        $new->antibiotic = $antibiotic;

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
     * @return ServiceMb
     */
    public function withResult_date($result_date)
    {
        $new = clone $this;
        $new->result_date = $result_date;

        return $new;
    }
}

