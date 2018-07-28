<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Establishment
 *
 * @JMS\AccessType("public_method")
 */
class Establishment
{
                        
    /**
     * @JMS\SerializedName("establishment_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentNumber;
                                    
    /**
     * @JMS\SerializedName("main_establishment")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $mainEstablishment;
                                    
    /**
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $status;
                                    
    /**
     * @JMS\SerializedName("legal_form_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalFormText;
                                    
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
     * @JMS\SerializedName("activity")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $activity;
                                    
    /**
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $description;
                                    
    /**
     * @JMS\SerializedName("sbi_codes")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $sbiCodes;
                                    
    /**
     * @JMS\SerializedName("sbi_codes_text")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $sbiCodesText;
                                    
    /**
     * @JMS\SerializedName("establishment_postcode")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentPostcode;
                                    
    /**
     * @JMS\SerializedName("establishment_city")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentCity;
                                    
    /**
     * @JMS\SerializedName("establishment_street")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentStreet;
                                    
    /**
     * @JMS\SerializedName("establishment_house_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $establishmentHouseNumber;
                                    
    /**
     * @JMS\SerializedName("establishment_house_number_addition")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentHouseNumberAddition;
                                    
    /**
     * @JMS\SerializedName("establishment_country")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentCountry;
                                    
    /**
     * @JMS\SerializedName("correspondence_postcode")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondencePostcode;
                                    
    /**
     * @JMS\SerializedName("correspondence_city")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceCity;
                                    
    /**
     * @JMS\SerializedName("correspondence_street")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceStreet;
                                    
    /**
     * @JMS\SerializedName("correspondence_house_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $correspondenceHouseNumber;
                                    
    /**
     * @JMS\SerializedName("correspondence_house_number_addition")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceHouseNumberAddition;
                                    
    /**
     * @JMS\SerializedName("correspondence_country")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $correspondenceCountry;
                                    
    /**
     * @JMS\SerializedName("curator_postcode")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $curatorPostcode;
                                    
    /**
     * @JMS\SerializedName("curator_city")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $curatorCity;
                                    
    /**
     * @JMS\SerializedName("curator_street")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $curatorStreet;
                                    
    /**
     * @JMS\SerializedName("curator_house_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $curatorHouseNumber;
                                    
    /**
     * @JMS\SerializedName("curator_house_number_addition")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $curatorHouseNumberAddition;
                                    
    /**
     * @JMS\SerializedName("curator_country")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $curatorCountry;
                                    
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
     * @JMS\SerializedName("fax_numbers")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $faxNumbers;
                                    
    /**
     * @JMS\SerializedName("email_addresses")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $emailAddresses;
                                    
    /**
     * @JMS\SerializedName("domain_names")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $domainNames;
                                    
    /**
     * @JMS\SerializedName("establishment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $establishmentDate;
                                    
    /**
     * @JMS\SerializedName("date_since")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $dateSince;
                                    
    /**
     * @JMS\SerializedName("personnel")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $personnel;
                                    
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
     * @return bool
     */
    public function isMainEstablishment(): ?bool
    {
        return $this->mainEstablishment;
    }

    /**
     * @param bool $mainEstablishment
     */
    public function setMainEstablishment(bool $mainEstablishment): void
    {
        $this->mainEstablishment = $mainEstablishment;
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
                                    
    /**
     * @return string
     */
    public function getLegalFormText(): ?string
    {
        return $this->legalFormText;
    }

    /**
     * @param string $legalFormText
     */
    public function setLegalFormText(string $legalFormText): void
    {
        $this->legalFormText = $legalFormText;
    }
                                    
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
    public function getActivity(): ?string
    {
        return $this->activity;
    }

    /**
     * @param string $activity
     */
    public function setActivity(string $activity): void
    {
        $this->activity = $activity;
    }
                                    
    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
                                    
    /**
     * @return array
     */
    public function getSbiCodes(): ?array
    {
        return $this->sbiCodes;
    }

    /**
     * @param array $sbiCodes
     */
    public function setSbiCodes(array $sbiCodes): void
    {
        $this->sbiCodes = $sbiCodes;
    }
                                    
    /**
     * @return array
     */
    public function getSbiCodesText(): ?array
    {
        return $this->sbiCodesText;
    }

    /**
     * @param array $sbiCodesText
     */
    public function setSbiCodesText(array $sbiCodesText): void
    {
        $this->sbiCodesText = $sbiCodesText;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentPostcode(): ?string
    {
        return $this->establishmentPostcode;
    }

    /**
     * @param string $establishmentPostcode
     */
    public function setEstablishmentPostcode(string $establishmentPostcode): void
    {
        $this->establishmentPostcode = $establishmentPostcode;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentCity(): ?string
    {
        return $this->establishmentCity;
    }

    /**
     * @param string $establishmentCity
     */
    public function setEstablishmentCity(string $establishmentCity): void
    {
        $this->establishmentCity = $establishmentCity;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentStreet(): ?string
    {
        return $this->establishmentStreet;
    }

    /**
     * @param string $establishmentStreet
     */
    public function setEstablishmentStreet(string $establishmentStreet): void
    {
        $this->establishmentStreet = $establishmentStreet;
    }
                                    
    /**
     * @return int
     */
    public function getEstablishmentHouseNumber(): ?int
    {
        return $this->establishmentHouseNumber;
    }

    /**
     * @param int $establishmentHouseNumber
     */
    public function setEstablishmentHouseNumber(int $establishmentHouseNumber): void
    {
        $this->establishmentHouseNumber = $establishmentHouseNumber;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentHouseNumberAddition(): ?string
    {
        return $this->establishmentHouseNumberAddition;
    }

    /**
     * @param string $establishmentHouseNumberAddition
     */
    public function setEstablishmentHouseNumberAddition(string $establishmentHouseNumberAddition): void
    {
        $this->establishmentHouseNumberAddition = $establishmentHouseNumberAddition;
    }
                                    
    /**
     * @return string
     */
    public function getEstablishmentCountry(): ?string
    {
        return $this->establishmentCountry;
    }

    /**
     * @param string $establishmentCountry
     */
    public function setEstablishmentCountry(string $establishmentCountry): void
    {
        $this->establishmentCountry = $establishmentCountry;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondencePostcode(): ?string
    {
        return $this->correspondencePostcode;
    }

    /**
     * @param string $correspondencePostcode
     */
    public function setCorrespondencePostcode(string $correspondencePostcode): void
    {
        $this->correspondencePostcode = $correspondencePostcode;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceCity(): ?string
    {
        return $this->correspondenceCity;
    }

    /**
     * @param string $correspondenceCity
     */
    public function setCorrespondenceCity(string $correspondenceCity): void
    {
        $this->correspondenceCity = $correspondenceCity;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceStreet(): ?string
    {
        return $this->correspondenceStreet;
    }

    /**
     * @param string $correspondenceStreet
     */
    public function setCorrespondenceStreet(string $correspondenceStreet): void
    {
        $this->correspondenceStreet = $correspondenceStreet;
    }
                                    
    /**
     * @return int
     */
    public function getCorrespondenceHouseNumber(): ?int
    {
        return $this->correspondenceHouseNumber;
    }

    /**
     * @param int $correspondenceHouseNumber
     */
    public function setCorrespondenceHouseNumber(int $correspondenceHouseNumber): void
    {
        $this->correspondenceHouseNumber = $correspondenceHouseNumber;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceHouseNumberAddition(): ?string
    {
        return $this->correspondenceHouseNumberAddition;
    }

    /**
     * @param string $correspondenceHouseNumberAddition
     */
    public function setCorrespondenceHouseNumberAddition(string $correspondenceHouseNumberAddition): void
    {
        $this->correspondenceHouseNumberAddition = $correspondenceHouseNumberAddition;
    }
                                    
    /**
     * @return string
     */
    public function getCorrespondenceCountry(): ?string
    {
        return $this->correspondenceCountry;
    }

    /**
     * @param string $correspondenceCountry
     */
    public function setCorrespondenceCountry(string $correspondenceCountry): void
    {
        $this->correspondenceCountry = $correspondenceCountry;
    }
                                    
    /**
     * @return string
     */
    public function getCuratorPostcode(): ?string
    {
        return $this->curatorPostcode;
    }

    /**
     * @param string $curatorPostcode
     */
    public function setCuratorPostcode(string $curatorPostcode): void
    {
        $this->curatorPostcode = $curatorPostcode;
    }
                                    
    /**
     * @return string
     */
    public function getCuratorCity(): ?string
    {
        return $this->curatorCity;
    }

    /**
     * @param string $curatorCity
     */
    public function setCuratorCity(string $curatorCity): void
    {
        $this->curatorCity = $curatorCity;
    }
                                    
    /**
     * @return string
     */
    public function getCuratorStreet(): ?string
    {
        return $this->curatorStreet;
    }

    /**
     * @param string $curatorStreet
     */
    public function setCuratorStreet(string $curatorStreet): void
    {
        $this->curatorStreet = $curatorStreet;
    }
                                    
    /**
     * @return int
     */
    public function getCuratorHouseNumber(): ?int
    {
        return $this->curatorHouseNumber;
    }

    /**
     * @param int $curatorHouseNumber
     */
    public function setCuratorHouseNumber(int $curatorHouseNumber): void
    {
        $this->curatorHouseNumber = $curatorHouseNumber;
    }
                                    
    /**
     * @return string
     */
    public function getCuratorHouseNumberAddition(): ?string
    {
        return $this->curatorHouseNumberAddition;
    }

    /**
     * @param string $curatorHouseNumberAddition
     */
    public function setCuratorHouseNumberAddition(string $curatorHouseNumberAddition): void
    {
        $this->curatorHouseNumberAddition = $curatorHouseNumberAddition;
    }
                                    
    /**
     * @return string
     */
    public function getCuratorCountry(): ?string
    {
        return $this->curatorCountry;
    }

    /**
     * @param string $curatorCountry
     */
    public function setCuratorCountry(string $curatorCountry): void
    {
        $this->curatorCountry = $curatorCountry;
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
     * @return array
     */
    public function getFaxNumbers(): ?array
    {
        return $this->faxNumbers;
    }

    /**
     * @param array $faxNumbers
     */
    public function setFaxNumbers(array $faxNumbers): void
    {
        $this->faxNumbers = $faxNumbers;
    }
                                    
    /**
     * @return array
     */
    public function getEmailAddresses(): ?array
    {
        return $this->emailAddresses;
    }

    /**
     * @param array $emailAddresses
     */
    public function setEmailAddresses(array $emailAddresses): void
    {
        $this->emailAddresses = $emailAddresses;
    }
                                    
    /**
     * @return array
     */
    public function getDomainNames(): ?array
    {
        return $this->domainNames;
    }

    /**
     * @param array $domainNames
     */
    public function setDomainNames(array $domainNames): void
    {
        $this->domainNames = $domainNames;
    }
                                    
    /**
     * @return Date
     */
    public function getEstablishmentDate(): ?Date
    {
        return $this->establishmentDate;
    }

    /**
     * @param Date $establishmentDate
     */
    public function setEstablishmentDate(Date $establishmentDate): void
    {
        $this->establishmentDate = $establishmentDate;
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
     * @return int
     */
    public function getPersonnel(): ?int
    {
        return $this->personnel;
    }

    /**
     * @param int $personnel
     */
    public function setPersonnel(int $personnel): void
    {
        $this->personnel = $personnel;
    }
}
