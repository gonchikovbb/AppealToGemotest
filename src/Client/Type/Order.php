<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Order implements RequestInterface
{
    /**
     * @var string
     */
    private $ext_num;

    /**
     * @var string
     */
    private $order_num;

    /**
     * @var string
     */
    private $doctor;

    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var bool
     */
    private $registered;

    /**
     * @var \DateTimeInterface
     */
    private $registration_date;

    /**
     * @var int
     */
    private $order_status;

    /**
     * @var int
     */
    private $result_status;

    /**
     * @var \App\Client\Type\Patient
     */
    private $patient;

    /**
     * @var \App\Client\Type\Representative
     */
    private $representative;

    /**
     * @var \App\Client\Type\Informing
     */
    private $informing;

    /**
     * @var \App\Client\Type\AdditionalInformation
     */
    private $additional_information;

    /**
     * @var \App\Client\Type\Services
     */
    private $services;

    /**
     * @var \App\Client\Type\OrderSample
     */
    private $order_samples;

    /**
     * @var \App\Client\Type\ServicesSupplementals
     */
    private $services_supplementals;

    /**
     * @var int
     */
    private $user_id;

    /**
     * @var bool
     */
    private $read_only;

    /**
     * @var bool
     */
    private $guarantee_letter;

    /**
     * @var bool
     */
    private $flag_travel_30_days;

    /**
     * @var string
     */
    private $travel_country;

    /**
     * @var \DateTimeInterface
     */
    private $return_date;

    /**
     * @var bool
     */
    private $covid_vaccination_flag;

    /**
     * @var string
     */
    private $covid_vaccine_name;

    /**
     * @var \DateTimeInterface
     */
    private $covid_first_vaccination_date;

    /**
     * @var \DateTimeInterface
     */
    private $covid_second_vaccination_date;

    /**
     * @var bool
     */
    private $flu_vaccination_flag;

    /**
     * @var string
     */
    private $flu_vaccine_name;

    /**
     * @var \DateTimeInterface
     */
    private $flu_vaccination_date;

    /**
     * @var string
     */
    private $country_code;

    /**
     * @var string
     */
    private $international_passport_last_name;

    /**
     * @var string
     */
    private $international_passport_name;

    /**
     * @var string
     */
    private $international_passport_number;

    /**
     * @var \DateTimeInterface
     */
    private $international_passport_issue_date;

    /**
     * @var string
     */
    private $international_passport_issued_by;

    /**
     * Constructor
     *
     * @var string $ext_num
     * @var string $order_num
     * @var string $doctor
     * @var string $contractor
     * @var string $hash
     * @var string $comment
     * @var bool $registered
     * @var \DateTimeInterface $registration_date
     * @var int $order_status
     * @var int $result_status
     * @var \App\Client\Type\Patient $patient
     * @var \App\Client\Type\Representative $representative
     * @var \App\Client\Type\Informing $informing
     * @var \App\Client\Type\AdditionalInformation $additional_information
     * @var \App\Client\Type\Services $services
     * @var \App\Client\Type\OrderSample $order_samples
     * @var \App\Client\Type\ServicesSupplementals $services_supplementals
     * @var int $user_id
     * @var bool $read_only
     * @var bool $guarantee_letter
     * @var bool $flag_travel_30_days
     * @var string $travel_country
     * @var \DateTimeInterface $return_date
     * @var bool $covid_vaccination_flag
     * @var string $covid_vaccine_name
     * @var \DateTimeInterface $covid_first_vaccination_date
     * @var \DateTimeInterface $covid_second_vaccination_date
     * @var bool $flu_vaccination_flag
     * @var string $flu_vaccine_name
     * @var \DateTimeInterface $flu_vaccination_date
     * @var string $country_code
     * @var string $international_passport_last_name
     * @var string $international_passport_name
     * @var string $international_passport_number
     * @var \DateTimeInterface $international_passport_issue_date
     * @var string $international_passport_issued_by
     */
    public function __construct($ext_num, $order_num, $doctor, $contractor, $hash, $comment, $registered, $registration_date, $order_status, $result_status, $patient, $representative, $informing, $additional_information, $services, $order_samples, $services_supplementals, $user_id, $read_only, $guarantee_letter, $flag_travel_30_days, $travel_country, $return_date, $covid_vaccination_flag, $covid_vaccine_name, $covid_first_vaccination_date, $covid_second_vaccination_date, $flu_vaccination_flag, $flu_vaccine_name, $flu_vaccination_date, $country_code, $international_passport_last_name, $international_passport_name, $international_passport_number, $international_passport_issue_date, $international_passport_issued_by)
    {
        $this->ext_num = $ext_num;
        $this->order_num = $order_num;
        $this->doctor = $doctor;
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->comment = $comment;
        $this->registered = $registered;
        $this->registration_date = $registration_date;
        $this->order_status = $order_status;
        $this->result_status = $result_status;
        $this->patient = $patient;
        $this->representative = $representative;
        $this->informing = $informing;
        $this->additional_information = $additional_information;
        $this->services = $services;
        $this->order_samples = $order_samples;
        $this->services_supplementals = $services_supplementals;
        $this->user_id = $user_id;
        $this->read_only = $read_only;
        $this->guarantee_letter = $guarantee_letter;
        $this->flag_travel_30_days = $flag_travel_30_days;
        $this->travel_country = $travel_country;
        $this->return_date = $return_date;
        $this->covid_vaccination_flag = $covid_vaccination_flag;
        $this->covid_vaccine_name = $covid_vaccine_name;
        $this->covid_first_vaccination_date = $covid_first_vaccination_date;
        $this->covid_second_vaccination_date = $covid_second_vaccination_date;
        $this->flu_vaccination_flag = $flu_vaccination_flag;
        $this->flu_vaccine_name = $flu_vaccine_name;
        $this->flu_vaccination_date = $flu_vaccination_date;
        $this->country_code = $country_code;
        $this->international_passport_last_name = $international_passport_last_name;
        $this->international_passport_name = $international_passport_name;
        $this->international_passport_number = $international_passport_number;
        $this->international_passport_issue_date = $international_passport_issue_date;
        $this->international_passport_issued_by = $international_passport_issued_by;
    }

    /**
     * @return string
     */
    public function getExt_num()
    {
        return $this->ext_num;
    }

    /**
     * @param string $ext_num
     * @return Order
     */
    public function withExt_num($ext_num)
    {
        $new = clone $this;
        $new->ext_num = $ext_num;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrder_num()
    {
        return $this->order_num;
    }

    /**
     * @param string $order_num
     * @return Order
     */
    public function withOrder_num($order_num)
    {
        $new = clone $this;
        $new->order_num = $order_num;

        return $new;
    }

    /**
     * @return string
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * @param string $doctor
     * @return Order
     */
    public function withDoctor($doctor)
    {
        $new = clone $this;
        $new->doctor = $doctor;

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
     * @return Order
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
     * @return Order
     */
    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Order
     */
    public function withComment($comment)
    {
        $new = clone $this;
        $new->comment = $comment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * @param bool $registered
     * @return Order
     */
    public function withRegistered($registered)
    {
        $new = clone $this;
        $new->registered = $registered;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getRegistration_date()
    {
        return $this->registration_date;
    }

    /**
     * @param \DateTimeInterface $registration_date
     * @return Order
     */
    public function withRegistration_date($registration_date)
    {
        $new = clone $this;
        $new->registration_date = $registration_date;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrder_status()
    {
        return $this->order_status;
    }

    /**
     * @param int $order_status
     * @return Order
     */
    public function withOrder_status($order_status)
    {
        $new = clone $this;
        $new->order_status = $order_status;

        return $new;
    }

    /**
     * @return int
     */
    public function getResult_status()
    {
        return $this->result_status;
    }

    /**
     * @param int $result_status
     * @return Order
     */
    public function withResult_status($result_status)
    {
        $new = clone $this;
        $new->result_status = $result_status;

        return $new;
    }

    /**
     * @return \App\Client\Type\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param \App\Client\Type\Patient $patient
     * @return Order
     */
    public function withPatient($patient)
    {
        $new = clone $this;
        $new->patient = $patient;

        return $new;
    }

    /**
     * @return \App\Client\Type\Representative
     */
    public function getRepresentative()
    {
        return $this->representative;
    }

    /**
     * @param \App\Client\Type\Representative $representative
     * @return Order
     */
    public function withRepresentative($representative)
    {
        $new = clone $this;
        $new->representative = $representative;

        return $new;
    }

    /**
     * @return \App\Client\Type\Informing
     */
    public function getInforming()
    {
        return $this->informing;
    }

    /**
     * @param \App\Client\Type\Informing $informing
     * @return Order
     */
    public function withInforming($informing)
    {
        $new = clone $this;
        $new->informing = $informing;

        return $new;
    }

    /**
     * @return \App\Client\Type\AdditionalInformation
     */
    public function getAdditional_information()
    {
        return $this->additional_information;
    }

    /**
     * @param \App\Client\Type\AdditionalInformation $additional_information
     * @return Order
     */
    public function withAdditional_information($additional_information)
    {
        $new = clone $this;
        $new->additional_information = $additional_information;

        return $new;
    }

    /**
     * @return \App\Client\Type\Services
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param \App\Client\Type\Services $services
     * @return Order
     */
    public function withServices($services)
    {
        $new = clone $this;
        $new->services = $services;

        return $new;
    }

    /**
     * @return \App\Client\Type\OrderSample
     */
    public function getOrder_samples()
    {
        return $this->order_samples;
    }

    /**
     * @param \App\Client\Type\OrderSample $order_samples
     * @return Order
     */
    public function withOrder_samples($order_samples)
    {
        $new = clone $this;
        $new->order_samples = $order_samples;

        return $new;
    }

    /**
     * @return \App\Client\Type\ServicesSupplementals
     */
    public function getServices_supplementals()
    {
        return $this->services_supplementals;
    }

    /**
     * @param \App\Client\Type\ServicesSupplementals $services_supplementals
     * @return Order
     */
    public function withServices_supplementals($services_supplementals)
    {
        $new = clone $this;
        $new->services_supplementals = $services_supplementals;

        return $new;
    }

    /**
     * @return int
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return Order
     */
    public function withUser_id($user_id)
    {
        $new = clone $this;
        $new->user_id = $user_id;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRead_only()
    {
        return $this->read_only;
    }

    /**
     * @param bool $read_only
     * @return Order
     */
    public function withRead_only($read_only)
    {
        $new = clone $this;
        $new->read_only = $read_only;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGuarantee_letter()
    {
        return $this->guarantee_letter;
    }

    /**
     * @param bool $guarantee_letter
     * @return Order
     */
    public function withGuarantee_letter($guarantee_letter)
    {
        $new = clone $this;
        $new->guarantee_letter = $guarantee_letter;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFlag_travel_30_days()
    {
        return $this->flag_travel_30_days;
    }

    /**
     * @param bool $flag_travel_30_days
     * @return Order
     */
    public function withFlag_travel_30_days($flag_travel_30_days)
    {
        $new = clone $this;
        $new->flag_travel_30_days = $flag_travel_30_days;

        return $new;
    }

    /**
     * @return string
     */
    public function getTravel_country()
    {
        return $this->travel_country;
    }

    /**
     * @param string $travel_country
     * @return Order
     */
    public function withTravel_country($travel_country)
    {
        $new = clone $this;
        $new->travel_country = $travel_country;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getReturn_date()
    {
        return $this->return_date;
    }

    /**
     * @param \DateTimeInterface $return_date
     * @return Order
     */
    public function withReturn_date($return_date)
    {
        $new = clone $this;
        $new->return_date = $return_date;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCovid_vaccination_flag()
    {
        return $this->covid_vaccination_flag;
    }

    /**
     * @param bool $covid_vaccination_flag
     * @return Order
     */
    public function withCovid_vaccination_flag($covid_vaccination_flag)
    {
        $new = clone $this;
        $new->covid_vaccination_flag = $covid_vaccination_flag;

        return $new;
    }

    /**
     * @return string
     */
    public function getCovid_vaccine_name()
    {
        return $this->covid_vaccine_name;
    }

    /**
     * @param string $covid_vaccine_name
     * @return Order
     */
    public function withCovid_vaccine_name($covid_vaccine_name)
    {
        $new = clone $this;
        $new->covid_vaccine_name = $covid_vaccine_name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCovid_first_vaccination_date()
    {
        return $this->covid_first_vaccination_date;
    }

    /**
     * @param \DateTimeInterface $covid_first_vaccination_date
     * @return Order
     */
    public function withCovid_first_vaccination_date($covid_first_vaccination_date)
    {
        $new = clone $this;
        $new->covid_first_vaccination_date = $covid_first_vaccination_date;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCovid_second_vaccination_date()
    {
        return $this->covid_second_vaccination_date;
    }

    /**
     * @param \DateTimeInterface $covid_second_vaccination_date
     * @return Order
     */
    public function withCovid_second_vaccination_date($covid_second_vaccination_date)
    {
        $new = clone $this;
        $new->covid_second_vaccination_date = $covid_second_vaccination_date;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFlu_vaccination_flag()
    {
        return $this->flu_vaccination_flag;
    }

    /**
     * @param bool $flu_vaccination_flag
     * @return Order
     */
    public function withFlu_vaccination_flag($flu_vaccination_flag)
    {
        $new = clone $this;
        $new->flu_vaccination_flag = $flu_vaccination_flag;

        return $new;
    }

    /**
     * @return string
     */
    public function getFlu_vaccine_name()
    {
        return $this->flu_vaccine_name;
    }

    /**
     * @param string $flu_vaccine_name
     * @return Order
     */
    public function withFlu_vaccine_name($flu_vaccine_name)
    {
        $new = clone $this;
        $new->flu_vaccine_name = $flu_vaccine_name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFlu_vaccination_date()
    {
        return $this->flu_vaccination_date;
    }

    /**
     * @param \DateTimeInterface $flu_vaccination_date
     * @return Order
     */
    public function withFlu_vaccination_date($flu_vaccination_date)
    {
        $new = clone $this;
        $new->flu_vaccination_date = $flu_vaccination_date;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountry_code()
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     * @return Order
     */
    public function withCountry_code($country_code)
    {
        $new = clone $this;
        $new->country_code = $country_code;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternational_passport_last_name()
    {
        return $this->international_passport_last_name;
    }

    /**
     * @param string $international_passport_last_name
     * @return Order
     */
    public function withInternational_passport_last_name($international_passport_last_name)
    {
        $new = clone $this;
        $new->international_passport_last_name = $international_passport_last_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternational_passport_name()
    {
        return $this->international_passport_name;
    }

    /**
     * @param string $international_passport_name
     * @return Order
     */
    public function withInternational_passport_name($international_passport_name)
    {
        $new = clone $this;
        $new->international_passport_name = $international_passport_name;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternational_passport_number()
    {
        return $this->international_passport_number;
    }

    /**
     * @param string $international_passport_number
     * @return Order
     */
    public function withInternational_passport_number($international_passport_number)
    {
        $new = clone $this;
        $new->international_passport_number = $international_passport_number;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInternational_passport_issue_date()
    {
        return $this->international_passport_issue_date;
    }

    /**
     * @param \DateTimeInterface $international_passport_issue_date
     * @return Order
     */
    public function withInternational_passport_issue_date($international_passport_issue_date)
    {
        $new = clone $this;
        $new->international_passport_issue_date = $international_passport_issue_date;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternational_passport_issued_by()
    {
        return $this->international_passport_issued_by;
    }

    /**
     * @param string $international_passport_issued_by
     * @return Order
     */
    public function withInternational_passport_issued_by($international_passport_issued_by)
    {
        $new = clone $this;
        $new->international_passport_issued_by = $international_passport_issued_by;

        return $new;
    }
}

