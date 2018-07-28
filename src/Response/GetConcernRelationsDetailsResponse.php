<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetConcernRelationsDetailsResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetConcernRelationsDetailsResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\GetConcernRelationsDetailsResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var GetConcernRelationsDetailsResult
     */
    protected $out;
                                    
    /**
     * @return GetConcernRelationsDetailsResult
     */
    public function getOut(): ?GetConcernRelationsDetailsResult
    {
        return $this->out;
    }

    /**
     * @param GetConcernRelationsDetailsResult $out
     */
    public function setOut(GetConcernRelationsDetailsResult $out): void
    {
        $this->out = $out;
    }
}
