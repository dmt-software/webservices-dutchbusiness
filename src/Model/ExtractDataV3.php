<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractDataV3
 *
 * @JMS\AccessType("public_method")
 */
class ExtractDataV3
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\LegalEntityV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $legalEntity;

    /**
     * @JMS\SerializedName("partnership")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\PartnershipV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $partnership;

    /**
     * @JMS\SerializedName("enterprise")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\EnterpriseV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $enterprise;

    /**
     * @JMS\SerializedName("establishments")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\EstablishmentV3>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var EstablishmentV3[]
     */
    protected $establishments;

    /**
     * @JMS\SerializedName("positions")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\PositionV3>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var PositionV3[]
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
     * @return LegalEntityV3
     */
    public function getLegalEntity(): ?LegalEntityV3
    {
        return $this->legalEntity;
    }

    /**
     * @param LegalEntityV3 $legalEntity
     */
    public function setLegalEntity(LegalEntityV3 $legalEntity): void
    {
        $this->legalEntity = $legalEntity;
    }

    /**
     * @return PartnershipV3
     */
    public function getPartnership(): ?PartnershipV3
    {
        return $this->partnership;
    }

    /**
     * @param PartnershipV3 $partnership
     */
    public function setPartnership(PartnershipV3 $partnership): void
    {
        $this->partnership = $partnership;
    }

    /**
     * @return EnterpriseV3
     */
    public function getEnterprise(): ?EnterpriseV3
    {
        return $this->enterprise;
    }

    /**
     * @param EnterpriseV3 $enterprise
     */
    public function setEnterprise(EnterpriseV3 $enterprise): void
    {
        $this->enterprise = $enterprise;
    }

    /**
     * @return EstablishmentV3[]
     */
    public function getEstablishments(): ?array
    {
        return $this->establishments;
    }

    /**
     * @param EstablishmentV3[] $establishments
     */
    public function setEstablishments(array $establishments): void
    {
        $this->establishments = $establishments;
    }

    /**
     * @return PositionV3[]
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * @param PositionV3[] $positions
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
