<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Service implements RequestInterface
{
    /**
     * @var string
     */
    private $contractor;

    /**
     * @var int
     */
    private $directory;

    /**
     * @var string
     */
    private $hash;

    /**
     * Constructor
     *
     * @var string $contractor
     * @var int $directory
     * @var string $hash
     */
    public function __construct($contractor, $directory, $hash)
    {
        $this->contractor = $contractor;
        $this->directory = $directory;
        $this->hash = $hash;
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
     * @return Service
     */
    public function withContractor($contractor)
    {
        $new = clone $this;
        $new->contractor = $contractor;

        return $new;
    }

    /**
     * @return int
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @param int $directory
     * @return Service
     */
    public function withDirectory($directory)
    {
        $new = clone $this;
        $new->directory = $directory;

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
     * @return Service
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }
}

