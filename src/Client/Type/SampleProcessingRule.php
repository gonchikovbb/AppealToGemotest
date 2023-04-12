<?php

namespace App\Client\Type;

class SampleProcessingRule
{
    /**
     * @var int
     */
    private $rule_id;

    /**
     * @var string
     */
    private $rule_name;

    /**
     * @var string
     */
    private $parameter_name;

    /**
     * @var string
     */
    private $parameter_description;

    /**
     * @var string
     */
    private $parameter_type_name;

    /**
     * @var string
     */
    private $parameter_type_title;

    /**
     * @var string
     */
    private $section_name;

    /**
     * @var string
     */
    private $section_title;

    /**
     * @return int
     */
    public function getRule_id()
    {
        return $this->rule_id;
    }

    /**
     * @param int $rule_id
     * @return SampleProcessingRule
     */
    public function withRule_id($rule_id)
    {
        $new = clone $this;
        $new->rule_id = $rule_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getRule_name()
    {
        return $this->rule_name;
    }

    /**
     * @param string $rule_name
     * @return SampleProcessingRule
     */
    public function withRule_name($rule_name)
    {
        $new = clone $this;
        $new->rule_name = $rule_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getParameter_name()
    {
        return $this->parameter_name;
    }

    /**
     * @param string $parameter_name
     * @return SampleProcessingRule
     */
    public function withParameter_name($parameter_name)
    {
        $new = clone $this;
        $new->parameter_name = $parameter_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getParameter_description()
    {
        return $this->parameter_description;
    }

    /**
     * @param string $parameter_description
     * @return SampleProcessingRule
     */
    public function withParameter_description($parameter_description)
    {
        $new = clone $this;
        $new->parameter_description = $parameter_description;

        return $new;
    }

    /**
     * @return string
     */
    public function getParameter_type_name()
    {
        return $this->parameter_type_name;
    }

    /**
     * @param string $parameter_type_name
     * @return SampleProcessingRule
     */
    public function withParameter_type_name($parameter_type_name)
    {
        $new = clone $this;
        $new->parameter_type_name = $parameter_type_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getParameter_type_title()
    {
        return $this->parameter_type_title;
    }

    /**
     * @param string $parameter_type_title
     * @return SampleProcessingRule
     */
    public function withParameter_type_title($parameter_type_title)
    {
        $new = clone $this;
        $new->parameter_type_title = $parameter_type_title;

        return $new;
    }

    /**
     * @return string
     */
    public function getSection_name()
    {
        return $this->section_name;
    }

    /**
     * @param string $section_name
     * @return SampleProcessingRule
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
    public function getSection_title()
    {
        return $this->section_title;
    }

    /**
     * @param string $section_title
     * @return SampleProcessingRule
     */
    public function withSection_title($section_title)
    {
        $new = clone $this;
        $new->section_title = $section_title;

        return $new;
    }
}

