<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PositionV2
 *
 * @JMS\AccessType("public_method")
 */
class PositionV2
{

    /**
     * @JMS\SerializedName("functionary")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\PersonV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionary;

    /**
     * @JMS\SerializedName("organisation")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\OrganizationReferenceV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $organisation;

    /**
     * @JMS\SerializedName("residential_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $residentialAddress;

    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $correspondenceAddress;

    /**
     * @JMS\SerializedName("establishment_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $establishmentAddress;

    /**
     * @JMS\SerializedName("longest_serving")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $longestServing;

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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionStartDate;

    /**
     * @JMS\SerializedName("function_registration_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionRegistrationDate;

    /**
     * @JMS\SerializedName("function_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
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
     * @JMS\SerializedName("authorization_establishment_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $authorizationEstablishmentNumber;

    /**
     * @JMS\SerializedName("authorization_start_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $authorizationStartDate;

    /**
     * @JMS\SerializedName("authorization_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $authorizationEndDate;

    /**
     * @JMS\SerializedName("authorization_constraints")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $authorizationConstraints;

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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
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
     * @JMS\SerializedName("date_since")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateSince;

    /**
     * @JMS\SerializedName("date_joined")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateJoined;

    /**
     * @JMS\SerializedName("remarks")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $remarks;

    /**
     * @return PersonV2
     */
    public function getFunctionary(): ?PersonV2
    {
        return $this->functionary;
    }

    /**
     * @param PersonV2 $functionary
     */
    public function setFunctionary(PersonV2 $functionary): void
    {
        $this->functionary = $functionary;
    }

    /**
     * @return OrganizationReferenceV2
     */
    public function getOrganisation(): ?OrganizationReferenceV2
    {
        return $this->organisation;
    }

    /**
     * @param OrganizationReferenceV2 $organisation
     */
    public function setOrganisation(OrganizationReferenceV2 $organisation): void
    {
        $this->organisation = $organisation;
    }

    /**
     * @return AddressV2
     */
    public function getResidentialAddress(): ?AddressV2
    {
        return $this->residentialAddress;
    }

    /**
     * @param AddressV2 $residentialAddress
     */
    public function setResidentialAddress(AddressV2 $residentialAddress): void
    {
        $this->residentialAddress = $residentialAddress;
    }

    /**
     * @return AddressV2
     */
    public function getCorrespondenceAddress(): ?AddressV2
    {
        return $this->correspondenceAddress;
    }

    /**
     * @param AddressV2 $correspondenceAddress
     */
    public function setCorrespondenceAddress(AddressV2 $correspondenceAddress): void
    {
        $this->correspondenceAddress = $correspondenceAddress;
    }

    /**
     * @return AddressV2
     */
    public function getEstablishmentAddress(): ?AddressV2
    {
        return $this->establishmentAddress;
    }

    /**
     * @param AddressV2 $establishmentAddress
     */
    public function setEstablishmentAddress(AddressV2 $establishmentAddress): void
    {
        $this->establishmentAddress = $establishmentAddress;
    }

    /**
     * @return bool
     */
    public function isLongestServing(): ?bool
    {
        return $this->longestServing;
    }

    /**
     * @param bool $longestServing
     */
    public function setLongestServing(bool $longestServing): void
    {
        $this->longestServing = $longestServing;
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
     * @return DateV2
     */
    public function getFunctionStartDate(): ?DateV2
    {
        return $this->functionStartDate;
    }

    /**
     * @param DateV2 $functionStartDate
     */
    public function setFunctionStartDate(DateV2 $functionStartDate): void
    {
        $this->functionStartDate = $functionStartDate;
    }

    /**
     * @return DateV2
     */
    public function getFunctionRegistrationDate(): ?DateV2
    {
        return $this->functionRegistrationDate;
    }

    /**
     * @param DateV2 $functionRegistrationDate
     */
    public function setFunctionRegistrationDate(DateV2 $functionRegistrationDate): void
    {
        $this->functionRegistrationDate = $functionRegistrationDate;
    }

    /**
     * @return DateV2
     */
    public function getFunctionEndDate(): ?DateV2
    {
        return $this->functionEndDate;
    }

    /**
     * @param DateV2 $functionEndDate
     */
    public function setFunctionEndDate(DateV2 $functionEndDate): void
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
     * @return DateV2
     */
    public function getFunctionAuthorizationStartDate(): ?DateV2
    {
        return $this->functionAuthorizationStartDate;
    }

    /**
     * @param DateV2 $functionAuthorizationStartDate
     */
    public function setFunctionAuthorizationStartDate(DateV2 $functionAuthorizationStartDate): void
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
     * @return DateV2
     */
    public function getFunctionAuthorizationEndDate(): ?DateV2
    {
        return $this->functionAuthorizationEndDate;
    }

    /**
     * @param DateV2 $functionAuthorizationEndDate
     */
    public function setFunctionAuthorizationEndDate(DateV2 $functionAuthorizationEndDate): void
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
     * @return string
     */
    public function getAuthorizationEstablishmentNumber(): ?string
    {
        return $this->authorizationEstablishmentNumber;
    }

    /**
     * @param string $authorizationEstablishmentNumber
     */
    public function setAuthorizationEstablishmentNumber(string $authorizationEstablishmentNumber): void
    {
        $this->authorizationEstablishmentNumber = $authorizationEstablishmentNumber;
    }

    /**
     * @return DateV2
     */
    public function getAuthorizationStartDate(): ?DateV2
    {
        return $this->authorizationStartDate;
    }

    /**
     * @param DateV2 $authorizationStartDate
     */
    public function setAuthorizationStartDate(DateV2 $authorizationStartDate): void
    {
        $this->authorizationStartDate = $authorizationStartDate;
    }

    /**
     * @return DateV2
     */
    public function getAuthorizationEndDate(): ?DateV2
    {
        return $this->authorizationEndDate;
    }

    /**
     * @param DateV2 $authorizationEndDate
     */
    public function setAuthorizationEndDate(DateV2 $authorizationEndDate): void
    {
        $this->authorizationEndDate = $authorizationEndDate;
    }

    /**
     * @return array
     */
    public function getAuthorizationConstraints(): ?array
    {
        return $this->authorizationConstraints;
    }

    /**
     * @param array $authorizationConstraints
     */
    public function setAuthorizationConstraints(array $authorizationConstraints): void
    {
        $this->authorizationConstraints = $authorizationConstraints;
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
     * @return DateV2
     */
    public function getInaugurationDate(): ?DateV2
    {
        return $this->inaugurationDate;
    }

    /**
     * @param DateV2 $inaugurationDate
     */
    public function setInaugurationDate(DateV2 $inaugurationDate): void
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
     * @return DateV2
     */
    public function getDateSince(): ?DateV2
    {
        return $this->dateSince;
    }

    /**
     * @param DateV2 $dateSince
     */
    public function setDateSince(DateV2 $dateSince): void
    {
        $this->dateSince = $dateSince;
    }

    /**
     * @return DateV2
     */
    public function getDateJoined(): ?DateV2
    {
        return $this->dateJoined;
    }

    /**
     * @param DateV2 $dateJoined
     */
    public function setDateJoined(DateV2 $dateJoined): void
    {
        $this->dateJoined = $dateJoined;
    }

    /**
     * @return array
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * @param array $remarks
     */
    public function setRemarks(array $remarks): void
    {
        $this->remarks = $remarks;
    }
}
