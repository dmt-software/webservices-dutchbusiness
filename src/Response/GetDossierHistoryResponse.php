<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierHistoryResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierHistoryResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DossierHistory")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DossierHistory
     */
    protected $out;
                                    
    /**
     * @return DossierHistory
     */
    public function getOut(): ?DossierHistory
    {
        return $this->out;
    }

    /**
     * @param DossierHistory $out
     */
    public function setOut(DossierHistory $out): void
    {
        $this->out = $out;
    }
}
