<?php

namespace App\Client\Type;

class ResponseGetServiceGroup
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $parent_id;

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
     * @return ResponseGetServiceGroup
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
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return ResponseGetServiceGroup
     */
    public function withParent_id($parent_id)
    {
        $new = clone $this;
        $new->parent_id = $parent_id;

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
     * @return ResponseGetServiceGroup
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
     * @return ResponseGetServiceGroup
     */
    public function withArchive($archive)
    {
        $new = clone $this;
        $new->archive = $archive;

        return $new;
    }
}

