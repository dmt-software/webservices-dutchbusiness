<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOStartInvestigationRequest
 *
 * Starts an UBO investigation for given dossierNumber and establishmentNumber
 *
 * @JMS\AccessType("public_method")
 */
class UBOStartInvestigationRequest
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
     * @JMS\SerializedName("oldest_extract_date")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $oldestExtractDate;

    /**
     * @JMS\SerializedName("use_updates")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $useUpdates;

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
    public function getOldestExtractDate(): ?\DateTime
    {
        return $this->oldestExtractDate;
    }

    /**
     * @param \DateTime $oldestExtractDate
     */
    public function setOldestExtractDate(\DateTime $oldestExtractDate): void
    {
        $this->oldestExtractDate = $oldestExtractDate;
    }

    /**
     * @return bool
     */
    public function isUseUpdates(): ?bool
    {
        return $this->useUpdates;
    }

    /**
     * @param bool $useUpdates
     */
    public function setUseUpdates(bool $useUpdates): void
    {
        $this->useUpdates = $useUpdates;
    }
}
