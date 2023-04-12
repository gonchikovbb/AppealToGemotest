<?php

namespace App\Client\Type;

class ResponseGetLocalization
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
     * @var int
     */
    private $archive;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ResponseGetLocalization
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
     * @return ResponseGetLocalization
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return int
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * @param int $archive
     * @return ResponseGetLocalization
     */
    public function withArchive($archive)
    {
        $new = clone $this;
        $new->archive = $archive;

        return $new;
    }
}

