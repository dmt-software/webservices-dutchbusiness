<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractDocumentDataRequest
 *
 * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister)
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractDocumentDataRequest implements RequestInterface
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
     * @JMS\SerializedName("allow_caching")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $allowCaching;
                                    
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
    public function isAllowCaching(): ?bool
    {
        return $this->allowCaching;
    }

    /**
     * @param bool $allowCaching
     */
    public function setAllowCaching(bool $allowCaching): void
    {
        $this->allowCaching = $allowCaching;
    }
}
