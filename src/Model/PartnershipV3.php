<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PartnershipV3
 *
 * @JMS\AccessType("public_method")
 */
class PartnershipV3
{

    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;

    /**
     * @JMS\SerializedName("rsin_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $rsinNumber;

    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $name;

    /**
     * @JMS\SerializedName("registration")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $registration;

    /**
     * @JMS\SerializedName("legal_form_text")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $legalFormText;

    /**
     * @JMS\SerializedName("founding_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $foundingDate;

    /**
     * @JMS\SerializedName("dissolution_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $dissolutionDate;

    /**
     * @JMS\SerializedName("function_start_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $functionStartDate;

    /**
     * @JMS\SerializedName("duration")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $duration;

    /**
     * @JMS\SerializedName("limited_partnership_capital")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $limitedPartnershipCapital;

    /**
     * @JMS\SerializedName("establishment_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $establishmentAddress;

    /**
     * @JMS\SerializedName("correspondence_address")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\AddressV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $correspondenceAddress;

    /**
     * @JMS\SerializedName("silent_partners")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $silentPartners;

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
    public function getRsinNumber(): ?string
    {
        return $this->rsinNumber;
    }

    /**
     * @param string $rsinNumber
     */
    public function setRsinNumber(string $rsinNumber): void
    {
        $this->rsinNumber = $rsinNumber;
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
    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    /**
     * @param string $registration
     */
    public function setRegistration(string $registration): void
    {
        $this->registration = $registration;
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
     * @return DateV3
     */
    public function getFoundingDate(): ?DateV3
    {
        return $this->foundingDate;
    }

    /**
     * @param DateV3 $foundingDate
     */
    public function setFoundingDate(DateV3 $foundingDate): void
    {
        $this->foundingDate = $foundingDate;
    }

    /**
     * @return DateV3
     */
    public function getDissolutionDate(): ?DateV3
    {
        return $this->dissolutionDate;
    }

    /**
     * @param DateV3 $dissolutionDate
     */
    public function setDissolutionDate(DateV3 $dissolutionDate): void
    {
        $this->dissolutionDate = $dissolutionDate;
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
     * @return string
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return MoneyV3
     */
    public function getLimitedPartnershipCapital(): ?MoneyV3
    {
        return $this->limitedPartnershipCapital;
    }

    /**
     * @param MoneyV3 $limitedPartnershipCapital
     */
    public function setLimitedPartnershipCapital(MoneyV3 $limitedPartnershipCapital): void
    {
        $this->limitedPartnershipCapital = $limitedPartnershipCapital;
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
     * @return int
     */
    public function getSilentPartners(): ?int
    {
        return $this->silentPartners;
    }

    /**
     * @param int $silentPartners
     */
    public function setSilentPartners(int $silentPartners): void
    {
        $this->silentPartners = $silentPartners;
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
