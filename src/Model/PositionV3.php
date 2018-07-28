<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PositionV3
 *
 * @JMS\AccessType("public_method")
 */
class PositionV3
{
                        
    /**
     * @JMS\SerializedName("functionary")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\PersonV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var PersonV3
     */
    protected $functionary;
                                    
    /**
     * @JMS\SerializedName("organisation")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\OrganizationReferenceV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var OrganizationReferenceV3
     */
    protected $organisation;
                                    
    /**
     * @JMS\SerializedName("residential_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
     */
    protected $residentialAddress;
                                    
    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
     */
    protected $correspondenceAddress;
                                    
    /**
     * @JMS\SerializedName("establishment_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $functionStartDate;
                                    
    /**
     * @JMS\SerializedName("function_registration_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $functionRegistrationDate;
                                    
    /**
     * @JMS\SerializedName("function_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $authorizationStartDate;
                                    
    /**
     * @JMS\SerializedName("authorization_end_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $dateSince;
                                    
    /**
     * @JMS\SerializedName("date_joined")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
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
     * @return PersonV3
     */
    public function getFunctionary(): ?PersonV3
    {
        return $this->functionary;
    }

    /**
     * @param PersonV3 $functionary
     */
    public function setFunctionary(PersonV3 $functionary): void
    {
        $this->functionary = $functionary;
    }
                                    
    /**
     * @return OrganizationReferenceV3
     */
    public function getOrganisation(): ?OrganizationReferenceV3
    {
        return $this->organisation;
    }

    /**
     * @param OrganizationReferenceV3 $organisation
     */
    public function setOrganisation(OrganizationReferenceV3 $organisation): void
    {
        $this->organisation = $organisation;
    }
                                    
    /**
     * @return AddressV3
     */
    public function getResidentialAddress(): ?AddressV3
    {
        return $this->residentialAddress;
    }

    /**
     * @param AddressV3 $residentialAddress
     */
    public function setResidentialAddress(AddressV3 $residentialAddress): void
    {
        $this->residentialAddress = $residentialAddress;
    }
                                    
    /**
     * @return AddressV3
     */
    public function getCorrespondenceAddress(): ?AddressV3
    {
        return $this->correspondenceAddress;
    }

    /**
     * @param AddressV3 $correspondenceAddress
     */
    public function setCorrespondenceAddress(AddressV3 $correspondenceAddress): void
    {
        $this->correspondenceAddress = $correspondenceAddress;
    }
                                    
    /**
     * @return AddressV3
     */
    public function getEstablishmentAddress(): ?AddressV3
    {
        return $this->establishmentAddress;
    }

    /**
     * @param AddressV3 $establishmentAddress
     */
    public function setEstablishmentAddress(AddressV3 $establishmentAddress): void
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
     * @return DateV3
     */
    public function getFunctionStartDate(): ?DateV3
    {
        return $this->functionStartDate;
    }

    /**
     * @param DateV3 $functionStartDate
     */
    public function setFunctionStartDate(DateV3 $functionStartDate): void
    {
        $this->functionStartDate = $functionStartDate;
    }
                                    
    /**
     * @return DateV3
     */
    public function getFunctionRegistrationDate(): ?DateV3
    {
        return $this->functionRegistrationDate;
    }

    /**
     * @param DateV3 $functionRegistrationDate
     */
    public function setFunctionRegistrationDate(DateV3 $functionRegistrationDate): void
    {
        $this->functionRegistrationDate = $functionRegistrationDate;
    }
                                    
    /**
     * @return DateV3
     */
    public function getFunctionEndDate(): ?DateV3
    {
        return $this->functionEndDate;
    }

    /**
     * @param DateV3 $functionEndDate
     */
    public function setFunctionEndDate(DateV3 $functionEndDate): void
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
     * @return DateV3
     */
    public function getFunctionAuthorizationStartDate(): ?DateV3
    {
        return $this->functionAuthorizationStartDate;
    }

    /**
     * @param DateV3 $functionAuthorizationStartDate
     */
    public function setFunctionAuthorizationStartDate(DateV3 $functionAuthorizationStartDate): void
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
     * @return DateV3
     */
    public function getFunctionAuthorizationEndDate(): ?DateV3
    {
        return $this->functionAuthorizationEndDate;
    }

    /**
     * @param DateV3 $functionAuthorizationEndDate
     */
    public function setFunctionAuthorizationEndDate(DateV3 $functionAuthorizationEndDate): void
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
     * @return DateV3
     */
    public function getAuthorizationStartDate(): ?DateV3
    {
        return $this->authorizationStartDate;
    }

    /**
     * @param DateV3 $authorizationStartDate
     */
    public function setAuthorizationStartDate(DateV3 $authorizationStartDate): void
    {
        $this->authorizationStartDate = $authorizationStartDate;
    }
                                    
    /**
     * @return DateV3
     */
    public function getAuthorizationEndDate(): ?DateV3
    {
        return $this->authorizationEndDate;
    }

    /**
     * @param DateV3 $authorizationEndDate
     */
    public function setAuthorizationEndDate(DateV3 $authorizationEndDate): void
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
     * @return DateV3
     */
    public function getInaugurationDate(): ?DateV3
    {
        return $this->inaugurationDate;
    }

    /**
     * @param DateV3 $inaugurationDate
     */
    public function setInaugurationDate(DateV3 $inaugurationDate): void
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
     * @return DateV3
     */
    public function getDateSince(): ?DateV3
    {
        return $this->dateSince;
    }

    /**
     * @param DateV3 $dateSince
     */
    public function setDateSince(DateV3 $dateSince): void
    {
        $this->dateSince = $dateSince;
    }
                                    
    /**
     * @return DateV3
     */
    public function getDateJoined(): ?DateV3
    {
        return $this->dateJoined;
    }

    /**
     * @param DateV3 $dateJoined
     */
    public function setDateJoined(DateV3 $dateJoined): void
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
