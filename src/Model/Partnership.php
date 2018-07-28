<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Partnership
 *
 * @JMS\AccessType("public_method")
 */
class Partnership
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
     * @JMS\SerializedName("founding_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $foundingDate;
                                    
    /**
     * @JMS\SerializedName("dissolution_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
     */
    protected $dissolutionDate;
                                    
    /**
     * @JMS\SerializedName("function_start_date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Date")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Date
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
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $limitedPartnershipCapital;
                                    
    /**
     * @JMS\SerializedName("limited_partnership_capital_currency")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $limitedPartnershipCapitalCurrency;
                                    
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
     * @JMS\SerializedName("silent_partners")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $silentPartners;
                                    
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
     * @return Date
     */
    public function getFoundingDate(): ?Date
    {
        return $this->foundingDate;
    }

    /**
     * @param Date $foundingDate
     */
    public function setFoundingDate(Date $foundingDate): void
    {
        $this->foundingDate = $foundingDate;
    }
                                    
    /**
     * @return Date
     */
    public function getDissolutionDate(): ?Date
    {
        return $this->dissolutionDate;
    }

    /**
     * @param Date $dissolutionDate
     */
    public function setDissolutionDate(Date $dissolutionDate): void
    {
        $this->dissolutionDate = $dissolutionDate;
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
     * @return int
     */
    public function getLimitedPartnershipCapital(): ?int
    {
        return $this->limitedPartnershipCapital;
    }

    /**
     * @param int $limitedPartnershipCapital
     */
    public function setLimitedPartnershipCapital(int $limitedPartnershipCapital): void
    {
        $this->limitedPartnershipCapital = $limitedPartnershipCapital;
    }
                                    
    /**
     * @return string
     */
    public function getLimitedPartnershipCapitalCurrency(): ?string
    {
        return $this->limitedPartnershipCapitalCurrency;
    }

    /**
     * @param string $limitedPartnershipCapitalCurrency
     */
    public function setLimitedPartnershipCapitalCurrency(string $limitedPartnershipCapitalCurrency): void
    {
        $this->limitedPartnershipCapitalCurrency = $limitedPartnershipCapitalCurrency;
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
}
