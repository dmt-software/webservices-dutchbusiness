<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchResponse
 *
 * @JMS\AccessType("public_method")
 */
class SearchResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\EstablishmentReferencePagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var EstablishmentReferencePagedResult
     */
    protected $out;
                                    
    /**
     * @return EstablishmentReferencePagedResult
     */
    public function getOut(): ?EstablishmentReferencePagedResult
    {
        return $this->out;
    }

    /**
     * @param EstablishmentReferencePagedResult $out
     */
    public function setOut(EstablishmentReferencePagedResult $out): void
    {
        $this->out = $out;
    }
}
