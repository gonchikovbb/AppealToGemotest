<?php

namespace App\Client\Type;

class Attachments
{
    /**
     * @var string
     */
    private $section_name;

    /**
     * @var string
     */
    private $file;

    /**
     * @return string
     */
    public function getSection_name()
    {
        return $this->section_name;
    }

    /**
     * @param string $section_name
     * @return Attachments
     */
    public function withSection_name($section_name)
    {
        $new = clone $this;
        $new->section_name = $section_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return Attachments
     */
    public function withFile($file)
    {
        $new = clone $this;
        $new->file = $file;

        return $new;
    }
}

