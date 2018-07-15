<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateSubscription
 *
 * @JMS\AccessType("public_method")
 */
class UpdateSubscription
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
     * @JMS\SerializedName("up_to_date")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $upToDate;

    /**
     * @JMS\SerializedName("pending_updates")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $pendingUpdates;

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
     * @return bool
     */
    public function isUpToDate(): ?bool
    {
        return $this->upToDate;
    }

    /**
     * @param bool $upToDate
     */
    public function setUpToDate(bool $upToDate): void
    {
        $this->upToDate = $upToDate;
    }

    /**
     * @return array
     */
    public function getPendingUpdates(): ?array
    {
        return $this->pendingUpdates;
    }

    /**
     * @param array $pendingUpdates
     */
    public function setPendingUpdates(array $pendingUpdates): void
    {
        $this->pendingUpdates = $pendingUpdates;
    }
}
