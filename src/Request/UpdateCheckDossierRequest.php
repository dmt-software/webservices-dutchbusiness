<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateCheckDossierRequest
 *
 * Retrieve information on the last change of a business establishment
 *
 * @JMS\AccessType("public_method")
 */
class UpdateCheckDossierRequest
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
}
