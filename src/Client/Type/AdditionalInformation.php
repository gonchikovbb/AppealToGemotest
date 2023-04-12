<?php

namespace App\Client\Type;

class AdditionalInformation
{
    /**
     * @var int
     */
    private $pregnant_week;

    /**
     * @var int
     */
    private $cycle_day;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $actual_address;

    /**
     * @var string
     */
    private $representative_actual_address;

    /**
     * @var string
     */
    private $representative_region;

    /**
     * @var string
     */
    private $passport;

    /**
     * @var \DateTimeInterface
     */
    private $passport_issued;

    /**
     * @var string
     */
    private $passport_issued_by;

    /**
     * @var string
     */
    private $snils;

    /**
     * @var string
     */
    private $oms;

    /**
     * @var string
     */
    private $dms;

    /**
     * @var string
     */
    private $dmc_companyname;

    /**
     * @var string
     */
    private $working_address;

    /**
     * @var bool
     */
    private $flag_travel_14_days;

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
     * @var \DateTimeInterface
     */
    private $illness_date;

    /**
     * @var \DateTimeInterface
     */
    private $contact_clinic_date;

    /**
     * @var \DateTimeInterface
     */
    private $biomaterial_taking_datetime;

    /**
     * @var \DateTimeInterface
     */
    private $biomaterial_shipping_datetime;

    /**
     * @var string
     */
    private $diagnosis;

    /**
     * @var string
     */
    private $diagnosis_mkb;

    /**
     * @var string
     */
    private $birth_certificate;

    /**
     * @var \DateTimeInterface
     */
    private $birth_certificate_issue_date;

    /**
     * @var string
     */
    private $birth_certificate_issue_by;

    /**
     * @var string
     */
    private $country_code;

    /**
     * @return int
     */
    public function getPregnant_week()
    {
        return $this->pregnant_week;
    }

    /**
     * @param int $pregnant_week
     * @return AdditionalInformation
     */
    public function withPregnant_week($pregnant_week)
    {
        $new = clone $this;
        $new->pregnant_week = $pregnant_week;

        return $new;
    }

    /**
     * @return int
     */
    public function getCycle_day()
    {
        return $this->cycle_day;
    }

    /**
     * @param int $cycle_day
     * @return AdditionalInformation
     */
    public function withCycle_day($cycle_day)
    {
        $new = clone $this;
        $new->cycle_day = $cycle_day;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return AdditionalInformation
     */
    public function withRegion($region)
    {
        $new = clone $this;
        $new->region = $region;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return AdditionalInformation
     */
    public function withCity($city)
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return AdditionalInformation
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return string
     */
    public function getActual_address()
    {
        return $this->actual_address;
    }

    /**
     * @param string $actual_address
     * @return AdditionalInformation
     */
    public function withActual_address($actual_address)
    {
        $new = clone $this;
        $new->actual_address = $actual_address;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepresentative_actual_address()
    {
        return $this->representative_actual_address;
    }

    /**
     * @param string $representative_actual_address
     * @return AdditionalInformation
     */
    public function withRepresentative_actual_address($representative_actual_address)
    {
        $new = clone $this;
        $new->representative_actual_address = $representative_actual_address;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepresentative_region()
    {
        return $this->representative_region;
    }

    /**
     * @param string $representative_region
     * @return AdditionalInformation
     */
    public function withRepresentative_region($representative_region)
    {
        $new = clone $this;
        $new->representative_region = $representative_region;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param string $passport
     * @return AdditionalInformation
     */
    public function withPassport($passport)
    {
        $new = clone $this;
        $new->passport = $passport;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPassport_issued()
    {
        return $this->passport_issued;
    }

    /**
     * @param \DateTimeInterface $passport_issued
     * @return AdditionalInformation
     */
    public function withPassport_issued($passport_issued)
    {
        $new = clone $this;
        $new->passport_issued = $passport_issued;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassport_issued_by()
    {
        return $this->passport_issued_by;
    }

    /**
     * @param string $passport_issued_by
     * @return AdditionalInformation
     */
    public function withPassport_issued_by($passport_issued_by)
    {
        $new = clone $this;
        $new->passport_issued_by = $passport_issued_by;

        return $new;
    }

    /**
     * @return string
     */
    public function getSnils()
    {
        return $this->snils;
    }

    /**
     * @param string $snils
     * @return AdditionalInformation
     */
    public function withSnils($snils)
    {
        $new = clone $this;
        $new->snils = $snils;

        return $new;
    }

    /**
     * @return string
     */
    public function getOms()
    {
        return $this->oms;
    }

    /**
     * @param string $oms
     * @return AdditionalInformation
     */
    public function withOms($oms)
    {
        $new = clone $this;
        $new->oms = $oms;

        return $new;
    }

    /**
     * @return string
     */
    public function getDms()
    {
        return $this->dms;
    }

    /**
     * @param string $dms
     * @return AdditionalInformation
     */
    public function withDms($dms)
    {
        $new = clone $this;
        $new->dms = $dms;

        return $new;
    }

    /**
     * @return string
     */
    public function getDmc_companyname()
    {
        return $this->dmc_companyname;
    }

    /**
     * @param string $dmc_companyname
     * @return AdditionalInformation
     */
    public function withDmc_companyname($dmc_companyname)
    {
        $new = clone $this;
        $new->dmc_companyname = $dmc_companyname;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorking_address()
    {
        return $this->working_address;
    }

    /**
     * @param string $working_address
     * @return AdditionalInformation
     */
    public function withWorking_address($working_address)
    {
        $new = clone $this;
        $new->working_address = $working_address;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFlag_travel_14_days()
    {
        return $this->flag_travel_14_days;
    }

    /**
     * @param bool $flag_travel_14_days
     * @return AdditionalInformation
     */
    public function withFlag_travel_14_days($flag_travel_14_days)
    {
        $new = clone $this;
        $new->flag_travel_14_days = $flag_travel_14_days;

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
     * @return AdditionalInformation
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
     * @return AdditionalInformation
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
     * @return AdditionalInformation
     */
    public function withReturn_date($return_date)
    {
        $new = clone $this;
        $new->return_date = $return_date;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getIllness_date()
    {
        return $this->illness_date;
    }

    /**
     * @param \DateTimeInterface $illness_date
     * @return AdditionalInformation
     */
    public function withIllness_date($illness_date)
    {
        $new = clone $this;
        $new->illness_date = $illness_date;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getContact_clinic_date()
    {
        return $this->contact_clinic_date;
    }

    /**
     * @param \DateTimeInterface $contact_clinic_date
     * @return AdditionalInformation
     */
    public function withContact_clinic_date($contact_clinic_date)
    {
        $new = clone $this;
        $new->contact_clinic_date = $contact_clinic_date;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBiomaterial_taking_datetime()
    {
        return $this->biomaterial_taking_datetime;
    }

    /**
     * @param \DateTimeInterface $biomaterial_taking_datetime
     * @return AdditionalInformation
     */
    public function withBiomaterial_taking_datetime($biomaterial_taking_datetime)
    {
        $new = clone $this;
        $new->biomaterial_taking_datetime = $biomaterial_taking_datetime;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBiomaterial_shipping_datetime()
    {
        return $this->biomaterial_shipping_datetime;
    }

    /**
     * @param \DateTimeInterface $biomaterial_shipping_datetime
     * @return AdditionalInformation
     */
    public function withBiomaterial_shipping_datetime($biomaterial_shipping_datetime)
    {
        $new = clone $this;
        $new->biomaterial_shipping_datetime = $biomaterial_shipping_datetime;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * @param string $diagnosis
     * @return AdditionalInformation
     */
    public function withDiagnosis($diagnosis)
    {
        $new = clone $this;
        $new->diagnosis = $diagnosis;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiagnosis_mkb()
    {
        return $this->diagnosis_mkb;
    }

    /**
     * @param string $diagnosis_mkb
     * @return AdditionalInformation
     */
    public function withDiagnosis_mkb($diagnosis_mkb)
    {
        $new = clone $this;
        $new->diagnosis_mkb = $diagnosis_mkb;

        return $new;
    }

    /**
     * @return string
     */
    public function getBirth_certificate()
    {
        return $this->birth_certificate;
    }

    /**
     * @param string $birth_certificate
     * @return AdditionalInformation
     */
    public function withBirth_certificate($birth_certificate)
    {
        $new = clone $this;
        $new->birth_certificate = $birth_certificate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBirth_certificate_issue_date()
    {
        return $this->birth_certificate_issue_date;
    }

    /**
     * @param \DateTimeInterface $birth_certificate_issue_date
     * @return AdditionalInformation
     */
    public function withBirth_certificate_issue_date($birth_certificate_issue_date)
    {
        $new = clone $this;
        $new->birth_certificate_issue_date = $birth_certificate_issue_date;

        return $new;
    }

    /**
     * @return string
     */
    public function getBirth_certificate_issue_by()
    {
        return $this->birth_certificate_issue_by;
    }

    /**
     * @param string $birth_certificate_issue_by
     * @return AdditionalInformation
     */
    public function withBirth_certificate_issue_by($birth_certificate_issue_by)
    {
        $new = clone $this;
        $new->birth_certificate_issue_by = $birth_certificate_issue_by;

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
     * @return AdditionalInformation
     */
    public function withCountry_code($country_code)
    {
        $new = clone $this;
        $new->country_code = $country_code;

        return $new;
    }
}

