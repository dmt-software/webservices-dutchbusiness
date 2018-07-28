<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class EstablishmentV3
 *
 * @JMS\AccessType("public_method")
 */
class EstablishmentV3
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
     * @JMS\SerializedName("legal_form_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalFormText;
                                    
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
     * @JMS\SerializedName("establishment_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $establishmentDate;
                                    
    /**
     * @JMS\SerializedName("date_since")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DateV3
     */
    protected $dateSince;
                                    
    /**
     * @JMS\SerializedName("personnel")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\PersonnelInfoV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var PersonnelInfoV3
     */
    protected $personnel;
                                    
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
     * @JMS\SerializedName("sbi_codes")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SbiCodeV3>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SbiCodeV3[]
     */
    protected $sbiCodes;
                                    
    /**
     * @JMS\SerializedName("establishment_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
     */
    protected $establishmentAddress;
                                    
    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var AddressV3
     */
    protected $correspondenceAddress;
                                    
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
     * @JMS\SerializedName("trade_names")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $tradeNames;
                                    
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
     * @return DateV3
     */
    public function getEstablishmentDate(): ?DateV3
    {
        return $this->establishmentDate;
    }

    /**
     * @param DateV3 $establishmentDate
     */
    public function setEstablishmentDate(DateV3 $establishmentDate): void
    {
        $this->establishmentDate = $establishmentDate;
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
     * @return PersonnelInfoV3
     */
    public function getPersonnel(): ?PersonnelInfoV3
    {
        return $this->personnel;
    }

    /**
     * @param PersonnelInfoV3 $personnel
     */
    public function setPersonnel(PersonnelInfoV3 $personnel): void
    {
        $this->personnel = $personnel;
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
                                    
    /**
     * @return SbiCodeV3[]
     */
    public function getSbiCodes(): ?array
    {
        return $this->sbiCodes;
    }

    /**
     * @param SbiCodeV3[] $sbiCodes
     */
    public function setSbiCodes(array $sbiCodes): void
    {
        $this->sbiCodes = $sbiCodes;
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
}
