<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PersonV3
 *
 * @JMS\AccessType("public_method")
 */
class PersonV3
{

    /**
     * @JMS\SerializedName("full_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $fullName;

    /**
     * @JMS\SerializedName("first_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $firstName;

    /**
     * @JMS\SerializedName("title")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $title;

    /**
     * @JMS\SerializedName("initials")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $initials;

    /**
     * @JMS\SerializedName("last_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $lastName;

    /**
     * @JMS\SerializedName("gender")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $gender;

    /**
     * @JMS\SerializedName("date_deceased")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateDeceased;

    /**
     * @JMS\SerializedName("date_of_birth")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateOfBirth;

    /**
     * @JMS\SerializedName("place_of_birth")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $placeOfBirth;

    /**
     * @JMS\SerializedName("country_of_birth")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $countryOfBirth;

    /**
     * @return string
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getInitials(): ?string
    {
        return $this->initials;
    }

    /**
     * @param string $initials
     */
    public function setInitials(string $initials): void
    {
        $this->initials = $initials;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return DateV3
     */
    public function getDateDeceased(): ?DateV3
    {
        return $this->dateDeceased;
    }

    /**
     * @param DateV3 $dateDeceased
     */
    public function setDateDeceased(DateV3 $dateDeceased): void
    {
        $this->dateDeceased = $dateDeceased;
    }

    /**
     * @return DateV3
     */
    public function getDateOfBirth(): ?DateV3
    {
        return $this->dateOfBirth;
    }

    /**
     * @param DateV3 $dateOfBirth
     */
    public function setDateOfBirth(DateV3 $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getPlaceOfBirth(): ?string
    {
        return $this->placeOfBirth;
    }

    /**
     * @param string $placeOfBirth
     */
    public function setPlaceOfBirth(string $placeOfBirth): void
    {
        $this->placeOfBirth = $placeOfBirth;
    }

    /**
     * @return string
     */
    public function getCountryOfBirth(): ?string
    {
        return $this->countryOfBirth;
    }

    /**
     * @param string $countryOfBirth
     */
    public function setCountryOfBirth(string $countryOfBirth): void
    {
        $this->countryOfBirth = $countryOfBirth;
    }
}
