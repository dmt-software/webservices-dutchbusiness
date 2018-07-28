<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOPerson
 *
 * @JMS\AccessType("public_method")
 */
class UBOPerson
{
                        
    /**
     * @JMS\SerializedName("key")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $key;
                                    
    /**
     * @JMS\SerializedName("first_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $firstName;
                                    
    /**
     * @JMS\SerializedName("middle_names")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $middleNames;
                                    
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
     * @JMS\SerializedName("date_of_birth")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
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
     * @JMS\SerializedName("date_of_death")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $dateOfDeath;
                                    
    /**
     * @JMS\SerializedName("roles")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\UBORole>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var UBORole[]
     */
    protected $roles;
                                    
    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
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
    public function getMiddleNames(): ?string
    {
        return $this->middleNames;
    }

    /**
     * @param string $middleNames
     */
    public function setMiddleNames(string $middleNames): void
    {
        $this->middleNames = $middleNames;
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
     * @return \DateTime
     */
    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth(\DateTime $dateOfBirth): void
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
                                    
    /**
     * @return \DateTime
     */
    public function getDateOfDeath(): ?\DateTime
    {
        return $this->dateOfDeath;
    }

    /**
     * @param \DateTime $dateOfDeath
     */
    public function setDateOfDeath(\DateTime $dateOfDeath): void
    {
        $this->dateOfDeath = $dateOfDeath;
    }
                                    
    /**
     * @return UBORole[]
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param UBORole[] $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }
}
