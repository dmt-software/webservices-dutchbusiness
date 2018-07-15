<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Positions
 *
 * @JMS\AccessType("public_method")
 */
class Positions
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
     * @JMS\SerializedName("positions")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\PositionV2>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var PositionV2[]
     */
    protected $positions;

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
}
