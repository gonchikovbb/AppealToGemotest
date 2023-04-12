<?php

namespace App\Client\Type;

class Patient
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $middlename;

    /**
     * @var \DateTimeInterface
     */
    private $birthdate;

    /**
     * @var int
     */
    private $gender;

    /**
     * @var bool
     */
    private $anonymous;

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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Patient
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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return Patient
     */
    public function withSurname($surname)
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Patient
     */
    public function withFirstname($firstname)
    {
        $new = clone $this;
        $new->firstname = $firstname;

        return $new;
    }

    /**
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @param string $middlename
     * @return Patient
     */
    public function withMiddlename($middlename)
    {
        $new = clone $this;
        $new->middlename = $middlename;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param \DateTimeInterface $birthdate
     * @return Patient
     */
    public function withBirthdate($birthdate)
    {
        $new = clone $this;
        $new->birthdate = $birthdate;

        return $new;
    }

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     * @return Patient
     */
    public function withGender($gender)
    {
        $new = clone $this;
        $new->gender = $gender;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * @param bool $anonymous
     * @return Patient
     */
    public function withAnonymous($anonymous)
    {
        $new = clone $this;
        $new->anonymous = $anonymous;

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
     * @return Patient
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
     * @return Patient
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
     * @return Patient
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
     * @return Patient
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
     * @return Patient
     */
    public function withInternational_passport_issued_by($international_passport_issued_by)
    {
        $new = clone $this;
        $new->international_passport_issued_by = $international_passport_issued_by;

        return $new;
    }
}

