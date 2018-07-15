<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractDocumentDataV3Request
 *
 * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister)
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractDocumentDataV3Request
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
     * @JMS\SerializedName("include_source")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $includeSource;

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
     * @return bool
     */
    public function isIncludeSource(): ?bool
    {
        return $this->includeSource;
    }

    /**
     * @param bool $includeSource
     */
    public function setIncludeSource(bool $includeSource): void
    {
        $this->includeSource = $includeSource;
    }
}
