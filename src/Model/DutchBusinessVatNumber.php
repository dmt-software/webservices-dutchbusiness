<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DutchBusinessVatNumber
 *
 * @JMS\AccessType("public_method")
 */
class DutchBusinessVatNumber
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
     * @JMS\SerializedName("vat_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $vatNumber;
                                    
    /**
     * @JMS\SerializedName("date_last_update")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $dateLastUpdate;
                                    
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
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     */
    public function setVatNumber(string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getDateLastUpdate(): ?\DateTime
    {
        return $this->dateLastUpdate;
    }

    /**
     * @param \DateTime $dateLastUpdate
     */
    public function setDateLastUpdate(\DateTime $dateLastUpdate): void
    {
        $this->dateLastUpdate = $dateLastUpdate;
    }
}
