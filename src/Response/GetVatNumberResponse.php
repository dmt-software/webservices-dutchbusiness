<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetVatNumberResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetVatNumberResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DutchBusinessVatNumber")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DutchBusinessVatNumber
     */
    protected $out;
                                    
    /**
     * @return DutchBusinessVatNumber
     */
    public function getOut(): ?DutchBusinessVatNumber
    {
        return $this->out;
    }

    /**
     * @param DutchBusinessVatNumber $out
     */
    public function setOut(DutchBusinessVatNumber $out): void
    {
        $this->out = $out;
    }
}
