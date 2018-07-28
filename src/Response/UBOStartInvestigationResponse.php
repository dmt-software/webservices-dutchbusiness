<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOStartInvestigationResponse
 *
 * @JMS\AccessType("public_method")
 */
class UBOStartInvestigationResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UBOInvestigationToken")
     * @JMS\XmlElement(cdata=false)
     *
     * @var UBOInvestigationToken
     */
    protected $out;
                                    
    /**
     * @return UBOInvestigationToken
     */
    public function getOut(): ?UBOInvestigationToken
    {
        return $this->out;
    }

    /**
     * @param UBOInvestigationToken $out
     */
    public function setOut(UBOInvestigationToken $out): void
    {
        $this->out = $out;
    }
}
