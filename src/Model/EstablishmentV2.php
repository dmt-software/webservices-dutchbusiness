<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class EstablishmentV2
 *
 * @JMS\AccessType("public_method")
 */
class EstablishmentV2
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $establishmentDate;

    /**
     * @JMS\SerializedName("date_since")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dateSince;

    /**
     * @JMS\SerializedName("personnel")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\PersonnelInfoV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
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
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\SbiCodeV2>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var SbiCodeV2[]
     */
    protected $sbiCodes;

    /**
     * @JMS\SerializedName("establishment_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $establishmentAddress;

    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
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
     * @return DateV2
     */
    public function getEstablishmentDate(): ?DateV2
    {
        return $this->establishmentDate;
    }

    /**
     * @param DateV2 $establishmentDate
     */
    public function setEstablishmentDate(DateV2 $establishmentDate): void
    {
        $this->establishmentDate = $establishmentDate;
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
     * @return PersonnelInfoV2
     */
    public function getPersonnel(): ?PersonnelInfoV2
    {
        return $this->personnel;
    }

    /**
     * @param PersonnelInfoV2 $personnel
     */
    public function setPersonnel(PersonnelInfoV2 $personnel): void
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
     * @return SbiCodeV2[]
     */
    public function getSbiCodes(): ?array
    {
        return $this->sbiCodes;
    }

    /**
     * @param SbiCodeV2[] $sbiCodes
     */
    public function setSbiCodes(array $sbiCodes): void
    {
        $this->sbiCodes = $sbiCodes;
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
