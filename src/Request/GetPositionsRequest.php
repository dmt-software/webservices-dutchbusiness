<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetPositionsRequest
 *
 * Retrieve position data on a business establishment
 *
 * @JMS\AccessType("public_method")
 */
class GetPositionsRequest implements RequestInterface
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
}
