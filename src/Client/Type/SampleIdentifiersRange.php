<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SampleIdentifiersRange implements ResultInterface
{
    /**
     * @var \App\Client\Type\ErrorDescription
     */
    private $error_description;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $range_start;

    /**
     * @var string
     */
    private $range_end;

    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $identifiers_count;

    /**
     * @return \App\Client\Type\ErrorDescription
     */
    public function getError_description()
    {
        return $this->error_description;
    }

    /**
     * @param \App\Client\Type\ErrorDescription $error_description
     * @return SampleIdentifiersRange
     */
    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return SampleIdentifiersRange
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return string
     */
    public function getRange_start()
    {
        return $this->range_start;
    }

    /**
     * @param string $range_start
     * @return SampleIdentifiersRange
     */
    public function withRange_start($range_start)
    {
        $new = clone $this;
        $new->range_start = $range_start;

        return $new;
    }

    /**
     * @return string
     */
    public function getRange_end()
    {
        return $this->range_end;
    }

    /**
     * @param string $range_end
     * @return SampleIdentifiersRange
     */
    public function withRange_end($range_end)
    {
        $new = clone $this;
        $new->range_end = $range_end;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * @param string $contractor
     * @return SampleIdentifiersRange
     */
    public function withContractor($contractor)
    {
        $new = clone $this;
        $new->contractor = $contractor;

        return $new;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return SampleIdentifiersRange
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiers_count()
    {
        return $this->identifiers_count;
    }

    /**
     * @param int $identifiers_count
     * @return SampleIdentifiersRange
     */
    public function withIdentifiers_count($identifiers_count)
    {
        $new = clone $this;
        $new->identifiers_count = $identifiers_count;

        return $new;
    }
}

