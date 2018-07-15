<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LegalEntityData
 *
 * @JMS\AccessType("public_method")
 */
class LegalEntityData
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
}
