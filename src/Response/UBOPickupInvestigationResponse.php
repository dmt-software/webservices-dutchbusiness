<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOPickupInvestigationResponse
 *
 * @JMS\AccessType("public_method")
 */
class UBOPickupInvestigationResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UBOInvestigationResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var UBOInvestigationResult
     */
    protected $out;
                                    
    /**
     * @return UBOInvestigationResult
     */
    public function getOut(): ?UBOInvestigationResult
    {
        return $this->out;
    }

    /**
     * @param UBOInvestigationResult $out
     */
    public function setOut(UBOInvestigationResult $out): void
    {
        $this->out = $out;
    }
}
