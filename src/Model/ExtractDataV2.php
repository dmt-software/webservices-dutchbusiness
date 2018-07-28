<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractDataV2
 *
 * @JMS\AccessType("public_method")
 */
class ExtractDataV2
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
     * @JMS\SerializedName("reference_date")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $referenceDate;
                                    
    /**
     * @JMS\SerializedName("legal_entity")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\LegalEntityV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var LegalEntityV2
     */
    protected $legalEntity;
                                    
    /**
     * @JMS\SerializedName("partnership")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\PartnershipV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var PartnershipV2
     */
    protected $partnership;
                                    
    /**
     * @JMS\SerializedName("enterprise")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\EnterpriseV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var EnterpriseV2
     */
    protected $enterprise;
                                    
    /**
     * @JMS\SerializedName("establishments")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\EstablishmentV2>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var EstablishmentV2[]
     */
    protected $establishments;
                                    
    /**
     * @JMS\SerializedName("positions")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\PositionV2>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var PositionV2[]
     */
    protected $positions;
                                    
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
     * @return \DateTime
     */
    public function getReferenceDate(): ?\DateTime
    {
        return $this->referenceDate;
    }

    /**
     * @param \DateTime $referenceDate
     */
    public function setReferenceDate(\DateTime $referenceDate): void
    {
        $this->referenceDate = $referenceDate;
    }
                                    
    /**
     * @return LegalEntityV2
     */
    public function getLegalEntity(): ?LegalEntityV2
    {
        return $this->legalEntity;
    }

    /**
     * @param LegalEntityV2 $legalEntity
     */
    public function setLegalEntity(LegalEntityV2 $legalEntity): void
    {
        $this->legalEntity = $legalEntity;
    }
                                    
    /**
     * @return PartnershipV2
     */
    public function getPartnership(): ?PartnershipV2
    {
        return $this->partnership;
    }

    /**
     * @param PartnershipV2 $partnership
     */
    public function setPartnership(PartnershipV2 $partnership): void
    {
        $this->partnership = $partnership;
    }
                                    
    /**
     * @return EnterpriseV2
     */
    public function getEnterprise(): ?EnterpriseV2
    {
        return $this->enterprise;
    }

    /**
     * @param EnterpriseV2 $enterprise
     */
    public function setEnterprise(EnterpriseV2 $enterprise): void
    {
        $this->enterprise = $enterprise;
    }
                                    
    /**
     * @return EstablishmentV2[]
     */
    public function getEstablishments(): ?array
    {
        return $this->establishments;
    }

    /**
     * @param EstablishmentV2[] $establishments
     */
    public function setEstablishments(array $establishments): void
    {
        $this->establishments = $establishments;
    }
                                    
    /**
     * @return PositionV2[]
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * @param PositionV2[] $positions
     */
    public function setPositions(array $positions): void
    {
        $this->positions = $positions;
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
