<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Position
 *
 * @JMS\AccessType("public_method")
 */
class Position
{

    /**
     * @JMS\SerializedName("trade_names")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $tradeNames;

    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;

    /**
     * @JMS\SerializedName("establishment_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentNumber;

    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $name;

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
     * @JMS\SerializedName("function_type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $functionType;

    /**
     * @JMS\SerializedName("function_description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $functionDescription;

    /**
     * @JMS\SerializedName("function_title")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $functionTitle;

    /**
     * @JMS\SerializedName("function_start_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionStartDate;

    /**
     * @JMS\SerializedName("function_registration_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionRegistrationDate;

    /**
     * @JMS\SerializedName("function_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionEndDate;

    /**
     * @JMS\SerializedName("function_authorization")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $functionAuthorization;

    /**
     * @JMS\SerializedName("function_authorization_description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $functionAuthorizationDescription;

    /**
     * @JMS\SerializedName("function_authorization_start_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionAuthorizationStartDate;

    /**
     * @JMS\SerializedName("function_authorization_signing_power")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $functionAuthorizationSigningPower;

    /**
     * @JMS\SerializedName("function_authorization_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionAuthorizationEndDate;

    /**
     * @JMS\SerializedName("authorization_description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $authorizationDescription;

    /**
     * @JMS\SerializedName("authorization_start_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $authorizationStartDate;

    /**
     * @JMS\SerializedName("authorization_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $authorizationEndDate;

    /**
     * @JMS\SerializedName("inauguration")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $inauguration;

    /**
     * @JMS\SerializedName("inauguration_function")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $inaugurationFunction;

    /**
     * @JMS\SerializedName("inauguration_duration")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $inaugurationDuration;

    /**
     * @JMS\SerializedName("inauguration_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $inaugurationDate;

    /**
     * @JMS\SerializedName("inauguration_body")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $inaugurationBody;

    /**
     * @JMS\SerializedName("under_receivership")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $underReceivership;

    /**
     * @JMS\SerializedName("rights_against_third_parties")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $rightsAgainstThirdParties;

    /**
     * @JMS\SerializedName("release_of_covenant")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $releaseOfCovenant;

    /**
     * @JMS\SerializedName("date_deceased")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateDeceased;

    /**
     * @JMS\SerializedName("date_of_birth")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
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
     * @JMS\SerializedName("postcode")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $postcode;

    /**
     * @JMS\SerializedName("city")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $city;

    /**
     * @JMS\SerializedName("street")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $street;

    /**
     * @JMS\SerializedName("house_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $houseNumber;

    /**
     * @JMS\SerializedName("house_number_addition")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $houseNumberAddition;

    /**
     * @JMS\SerializedName("country")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $country;

    /**
     * @JMS\SerializedName("telephone_numbers")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $telephoneNumbers;

    /**
     * @JMS\SerializedName("date_since")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateSince;

    /**
     * @JMS\SerializedName("date_joined")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateJoined;

    /**
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $status;

    /**
     * @return array
     */
    public function getTradeNames(): ?array
    {
        return $this->tradeNames;
    }

    /**
     * @param array $tradeNames
     */
    public function setTradeNames(array $tradeNames): void
    {
        $this->tradeNames = $tradeNames;
    }

    /**
     * @return string
     */
    public function getDossierNumber(): ?string
    {
        return $this->dossierNumber;
    }

    /**
     * @param string $dossierNumber
     */
    public function setDossierNumber(string $dossierNumber): void
    {
        $this->dossierNumber = $dossierNumber;
    }

    /**
     * @return string
     */
    public function getEstablishmentNumber(): ?string
    {
        return $this->establishmentNumber;
    }

    /**
     * @param string $establishmentNumber
     */
    public function setEstablishmentNumber(string $establishmentNumber): void
    {
        $this->establishmentNumber = $establishmentNumber;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
    public function getFunctionType(): ?string
    {
        return $this->functionType;
    }

    /**
     * @param string $functionType
     */
    public function setFunctionType(string $functionType): void
    {
        $this->functionType = $functionType;
    }

    /**
     * @return string
     */
    public function getFunctionDescription(): ?string
    {
        return $this->functionDescription;
    }

    /**
     * @param string $functionDescription
     */
    public function setFunctionDescription(string $functionDescription): void
    {
        $this->functionDescription = $functionDescription;
    }

    /**
     * @return string
     */
    public function getFunctionTitle(): ?string
    {
        return $this->functionTitle;
    }

    /**
     * @param string $functionTitle
     */
    public function setFunctionTitle(string $functionTitle): void
    {
        $this->functionTitle = $functionTitle;
    }

    /**
     * @return Date
     */
    public function getFunctionStartDate(): ?Date
    {
        return $this->functionStartDate;
    }

    /**
     * @param Date $functionStartDate
     */
    public function setFunctionStartDate(Date $functionStartDate): void
    {
        $this->functionStartDate = $functionStartDate;
    }

    /**
     * @return Date
     */
    public function getFunctionRegistrationDate(): ?Date
    {
        return $this->functionRegistrationDate;
    }

    /**
     * @param Date $functionRegistrationDate
     */
    public function setFunctionRegistrationDate(Date $functionRegistrationDate): void
    {
        $this->functionRegistrationDate = $functionRegistrationDate;
    }

    /**
     * @return Date
     */
    public function getFunctionEndDate(): ?Date
    {
        return $this->functionEndDate;
    }

    /**
     * @param Date $functionEndDate
     */
    public function setFunctionEndDate(Date $functionEndDate): void
    {
        $this->functionEndDate = $functionEndDate;
    }

    /**
     * @return string
     */
    public function getFunctionAuthorization(): ?string
    {
        return $this->functionAuthorization;
    }

    /**
     * @param string $functionAuthorization
     */
    public function setFunctionAuthorization(string $functionAuthorization): void
    {
        $this->functionAuthorization = $functionAuthorization;
    }

    /**
     * @return string
     */
    public function getFunctionAuthorizationDescription(): ?string
    {
        return $this->functionAuthorizationDescription;
    }

    /**
     * @param string $functionAuthorizationDescription
     */
    public function setFunctionAuthorizationDescription(string $functionAuthorizationDescription): void
    {
        $this->functionAuthorizationDescription = $functionAuthorizationDescription;
    }

    /**
     * @return Date
     */
    public function getFunctionAuthorizationStartDate(): ?Date
    {
        return $this->functionAuthorizationStartDate;
    }

    /**
     * @param Date $functionAuthorizationStartDate
     */
    public function setFunctionAuthorizationStartDate(Date $functionAuthorizationStartDate): void
    {
        $this->functionAuthorizationStartDate = $functionAuthorizationStartDate;
    }

    /**
     * @return string
     */
    public function getFunctionAuthorizationSigningPower(): ?string
    {
        return $this->functionAuthorizationSigningPower;
    }

    /**
     * @param string $functionAuthorizationSigningPower
     */
    public function setFunctionAuthorizationSigningPower(string $functionAuthorizationSigningPower): void
    {
        $this->functionAuthorizationSigningPower = $functionAuthorizationSigningPower;
    }

    /**
     * @return Date
     */
    public function getFunctionAuthorizationEndDate(): ?Date
    {
        return $this->functionAuthorizationEndDate;
    }

    /**
     * @param Date $functionAuthorizationEndDate
     */
    public function setFunctionAuthorizationEndDate(Date $functionAuthorizationEndDate): void
    {
        $this->functionAuthorizationEndDate = $functionAuthorizationEndDate;
    }

    /**
     * @return string
     */
    public function getAuthorizationDescription(): ?string
    {
        return $this->authorizationDescription;
    }

    /**
     * @param string $authorizationDescription
     */
    public function setAuthorizationDescription(string $authorizationDescription): void
    {
        $this->authorizationDescription = $authorizationDescription;
    }

    /**
     * @return Date
     */
    public function getAuthorizationStartDate(): ?Date
    {
        return $this->authorizationStartDate;
    }

    /**
     * @param Date $authorizationStartDate
     */
    public function setAuthorizationStartDate(Date $authorizationStartDate): void
    {
        $this->authorizationStartDate = $authorizationStartDate;
    }

    /**
     * @return Date
     */
    public function getAuthorizationEndDate(): ?Date
    {
        return $this->authorizationEndDate;
    }

    /**
     * @param Date $authorizationEndDate
     */
    public function setAuthorizationEndDate(Date $authorizationEndDate): void
    {
        $this->authorizationEndDate = $authorizationEndDate;
    }

    /**
     * @return string
     */
    public function getInauguration(): ?string
    {
        return $this->inauguration;
    }

    /**
     * @param string $inauguration
     */
    public function setInauguration(string $inauguration): void
    {
        $this->inauguration = $inauguration;
    }

    /**
     * @return string
     */
    public function getInaugurationFunction(): ?string
    {
        return $this->inaugurationFunction;
    }

    /**
     * @param string $inaugurationFunction
     */
    public function setInaugurationFunction(string $inaugurationFunction): void
    {
        $this->inaugurationFunction = $inaugurationFunction;
    }

    /**
     * @return string
     */
    public function getInaugurationDuration(): ?string
    {
        return $this->inaugurationDuration;
    }

    /**
     * @param string $inaugurationDuration
     */
    public function setInaugurationDuration(string $inaugurationDuration): void
    {
        $this->inaugurationDuration = $inaugurationDuration;
    }

    /**
     * @return Date
     */
    public function getInaugurationDate(): ?Date
    {
        return $this->inaugurationDate;
    }

    /**
     * @param Date $inaugurationDate
     */
    public function setInaugurationDate(Date $inaugurationDate): void
    {
        $this->inaugurationDate = $inaugurationDate;
    }

    /**
     * @return string
     */
    public function getInaugurationBody(): ?string
    {
        return $this->inaugurationBody;
    }

    /**
     * @param string $inaugurationBody
     */
    public function setInaugurationBody(string $inaugurationBody): void
    {
        $this->inaugurationBody = $inaugurationBody;
    }

    /**
     * @return string
     */
    public function getUnderReceivership(): ?string
    {
        return $this->underReceivership;
    }

    /**
     * @param string $underReceivership
     */
    public function setUnderReceivership(string $underReceivership): void
    {
        $this->underReceivership = $underReceivership;
    }

    /**
     * @return string
     */
    public function getRightsAgainstThirdParties(): ?string
    {
        return $this->rightsAgainstThirdParties;
    }

    /**
     * @param string $rightsAgainstThirdParties
     */
    public function setRightsAgainstThirdParties(string $rightsAgainstThirdParties): void
    {
        $this->rightsAgainstThirdParties = $rightsAgainstThirdParties;
    }

    /**
     * @return string
     */
    public function getReleaseOfCovenant(): ?string
    {
        return $this->releaseOfCovenant;
    }

    /**
     * @param string $releaseOfCovenant
     */
    public function setReleaseOfCovenant(string $releaseOfCovenant): void
    {
        $this->releaseOfCovenant = $releaseOfCovenant;
    }

    /**
     * @return Date
     */
    public function getDateDeceased(): ?Date
    {
        return $this->dateDeceased;
    }

    /**
     * @param Date $dateDeceased
     */
    public function setDateDeceased(Date $dateDeceased): void
    {
        $this->dateDeceased = $dateDeceased;
    }

    /**
     * @return Date
     */
    public function getDateOfBirth(): ?Date
    {
        return $this->dateOfBirth;
    }

    /**
     * @param Date $dateOfBirth
     */
    public function setDateOfBirth(Date $dateOfBirth): void
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
     * @return string
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode(string $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return int
     */
    public function getHouseNumber(): ?int
    {
        return $this->houseNumber;
    }

    /**
     * @param int $houseNumber
     */
    public function setHouseNumber(int $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getHouseNumberAddition(): ?string
    {
        return $this->houseNumberAddition;
    }

    /**
     * @param string $houseNumberAddition
     */
    public function setHouseNumberAddition(string $houseNumberAddition): void
    {
        $this->houseNumberAddition = $houseNumberAddition;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return array
     */
    public function getTelephoneNumbers(): ?array
    {
        return $this->telephoneNumbers;
    }

    /**
     * @param array $telephoneNumbers
     */
    public function setTelephoneNumbers(array $telephoneNumbers): void
    {
        $this->telephoneNumbers = $telephoneNumbers;
    }

    /**
     * @return Date
     */
    public function getDateSince(): ?Date
    {
        return $this->dateSince;
    }

    /**
     * @param Date $dateSince
     */
    public function setDateSince(Date $dateSince): void
    {
        $this->dateSince = $dateSince;
    }

    /**
     * @return Date
     */
    public function getDateJoined(): ?Date
    {
        return $this->dateJoined;
    }

    /**
     * @param Date $dateJoined
     */
    public function setDateJoined(Date $dateJoined): void
    {
        $this->dateJoined = $dateJoined;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
