<?php

namespace App\Client\Type;

class Representative
{
    /**
     * @var int
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
     * @var string
     */
    private $snils;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Representative
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
     * @return Representative
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
     * @return Representative
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
     * @return Representative
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
     * @return Representative
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
     * @return Representative
     */
    public function withGender($gender)
    {
        $new = clone $this;
        $new->gender = $gender;

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
     * @return Representative
     */
    public function withSnils($snils)
    {
        $new = clone $this;
        $new->snils = $snils;

        return $new;
    }
}

