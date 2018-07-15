<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateReference
 *
 * @JMS\AccessType("public_method")
 */
class UpdateReference
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
     * @JMS\SerializedName("update_types")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $updateTypes;

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
     * @return array
     */
    public function getUpdateTypes(): ?array
    {
        return $this->updateTypes;
    }

    /**
     * @param array $updateTypes
     */
    public function setUpdateTypes(array $updateTypes): void
    {
        $this->updateTypes = $updateTypes;
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
