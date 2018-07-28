<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ReferenceV2
 *
 * @JMS\AccessType("public_method")
 */
class ReferenceV2
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
     * @JMS\SerializedName("match_type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $matchType;
                                    
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
     * @JMS\SerializedName("indication_economically_active")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $indicationEconomicallyActive;
                                    
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
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param string $matchType
     */
    public function setMatchType(string $matchType): void
    {
        $this->matchType = $matchType;
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
     * @return bool
     */
    public function isIndicationEconomicallyActive(): ?bool
    {
        return $this->indicationEconomicallyActive;
    }

    /**
     * @param bool $indicationEconomicallyActive
     */
    public function setIndicationEconomicallyActive(bool $indicationEconomicallyActive): void
    {
        $this->indicationEconomicallyActive = $indicationEconomicallyActive;
    }
}
