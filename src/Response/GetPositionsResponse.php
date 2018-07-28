<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetPositionsResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetPositionsResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Positions")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Positions
     */
    protected $out;
                                    
    /**
     * @return Positions
     */
    public function getOut(): ?Positions
    {
        return $this->out;
    }

    /**
     * @param Positions $out
     */
    public function setOut(Positions $out): void
    {
        $this->out = $out;
    }
}
