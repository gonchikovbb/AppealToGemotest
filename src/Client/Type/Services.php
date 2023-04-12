<?php

namespace App\Client\Type;

class Services
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $service_type;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $other_biomaterial;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var string
     */
    private $other_localization;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var bool
     */
    private $probe_in_work;

    /**
     * @var \App\Client\Type\AdditionalTests
     */
    private $additional_tests;

    /**
     * @var int
     */
    private $age_lock_from;

    /**
     * @var int
     */
    private $age_lock_to;

    /**
     * @var int
     */
    private $pregnancy_week_lock_from;

    /**
     * @var int
     */
    private $pregnancy_week_lock_to;

    /**
     * @var int
     */
    private $allowed_for_gender;

    /**
     * @var string
     */
    private $group_id;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $execution_period;

    /**
     * @var bool
     */
    private $is_blocked;

    /**
     * @var int
     */
    private $increase_period;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Services
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Services
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

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
     * @return Services
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Services
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return int
     */
    public function getService_type()
    {
        return $this->service_type;
    }

    /**
     * @param int $service_type
     * @return Services
     */
    public function withService_type($service_type)
    {
        $new = clone $this;
        $new->service_type = $service_type;

        return $new;
    }

    /**
     * @return string
     */
    public function getBiomaterial_id()
    {
        return $this->biomaterial_id;
    }

    /**
     * @param string $biomaterial_id
     * @return Services
     */
    public function withBiomaterial_id($biomaterial_id)
    {
        $new = clone $this;
        $new->biomaterial_id = $biomaterial_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getOther_biomaterial()
    {
        return $this->other_biomaterial;
    }

    /**
     * @param string $other_biomaterial
     * @return Services
     */
    public function withOther_biomaterial($other_biomaterial)
    {
        $new = clone $this;
        $new->other_biomaterial = $other_biomaterial;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocalization_id()
    {
        return $this->localization_id;
    }

    /**
     * @param string $localization_id
     * @return Services
     */
    public function withLocalization_id($localization_id)
    {
        $new = clone $this;
        $new->localization_id = $localization_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getOther_localization()
    {
        return $this->other_localization;
    }

    /**
     * @param string $other_localization
     * @return Services
     */
    public function withOther_localization($other_localization)
    {
        $new = clone $this;
        $new->other_localization = $other_localization;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransport_id()
    {
        return $this->transport_id;
    }

    /**
     * @param string $transport_id
     * @return Services
     */
    public function withTransport_id($transport_id)
    {
        $new = clone $this;
        $new->transport_id = $transport_id;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProbe_in_work()
    {
        return $this->probe_in_work;
    }

    /**
     * @param bool $probe_in_work
     * @return Services
     */
    public function withProbe_in_work($probe_in_work)
    {
        $new = clone $this;
        $new->probe_in_work = $probe_in_work;

        return $new;
    }

    /**
     * @return \App\Client\Type\AdditionalTests
     */
    public function getAdditional_tests()
    {
        return $this->additional_tests;
    }

    /**
     * @param \App\Client\Type\AdditionalTests $additional_tests
     * @return Services
     */
    public function withAdditional_tests($additional_tests)
    {
        $new = clone $this;
        $new->additional_tests = $additional_tests;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge_lock_from()
    {
        return $this->age_lock_from;
    }

    /**
     * @param int $age_lock_from
     * @return Services
     */
    public function withAge_lock_from($age_lock_from)
    {
        $new = clone $this;
        $new->age_lock_from = $age_lock_from;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge_lock_to()
    {
        return $this->age_lock_to;
    }

    /**
     * @param int $age_lock_to
     * @return Services
     */
    public function withAge_lock_to($age_lock_to)
    {
        $new = clone $this;
        $new->age_lock_to = $age_lock_to;

        return $new;
    }

    /**
     * @return int
     */
    public function getPregnancy_week_lock_from()
    {
        return $this->pregnancy_week_lock_from;
    }

    /**
     * @param int $pregnancy_week_lock_from
     * @return Services
     */
    public function withPregnancy_week_lock_from($pregnancy_week_lock_from)
    {
        $new = clone $this;
        $new->pregnancy_week_lock_from = $pregnancy_week_lock_from;

        return $new;
    }

    /**
     * @return int
     */
    public function getPregnancy_week_lock_to()
    {
        return $this->pregnancy_week_lock_to;
    }

    /**
     * @param int $pregnancy_week_lock_to
     * @return Services
     */
    public function withPregnancy_week_lock_to($pregnancy_week_lock_to)
    {
        $new = clone $this;
        $new->pregnancy_week_lock_to = $pregnancy_week_lock_to;

        return $new;
    }

    /**
     * @return int
     */
    public function getAllowed_for_gender()
    {
        return $this->allowed_for_gender;
    }

    /**
     * @param int $allowed_for_gender
     * @return Services
     */
    public function withAllowed_for_gender($allowed_for_gender)
    {
        $new = clone $this;
        $new->allowed_for_gender = $allowed_for_gender;

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
     * @return Services
     */
    public function withGroup_id($group_id)
    {
        $new = clone $this;
        $new->group_id = $group_id;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Services
     */
    public function withPrice($price)
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }

    /**
     * @return int
     */
    public function getExecution_period()
    {
        return $this->execution_period;
    }

    /**
     * @param int $execution_period
     * @return Services
     */
    public function withExecution_period($execution_period)
    {
        $new = clone $this;
        $new->execution_period = $execution_period;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIs_blocked()
    {
        return $this->is_blocked;
    }

    /**
     * @param bool $is_blocked
     * @return Services
     */
    public function withIs_blocked($is_blocked)
    {
        $new = clone $this;
        $new->is_blocked = $is_blocked;

        return $new;
    }

    /**
     * @return int
     */
    public function getIncrease_period()
    {
        return $this->increase_period;
    }

    /**
     * @param int $increase_period
     * @return Services
     */
    public function withIncrease_period($increase_period)
    {
        $new = clone $this;
        $new->increase_period = $increase_period;

        return $new;
    }
}

