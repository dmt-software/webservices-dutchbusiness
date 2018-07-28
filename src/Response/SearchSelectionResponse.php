<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchSelectionResponse
 *
 * @JMS\AccessType("public_method")
 */
class SearchSelectionResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ReferencePagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ReferencePagedResult
     */
    protected $out;
                                    
    /**
     * @return ReferencePagedResult
     */
    public function getOut(): ?ReferencePagedResult
    {
        return $this->out;
    }

    /**
     * @param ReferencePagedResult $out
     */
    public function setOut(ReferencePagedResult $out): void
    {
        $this->out = $out;
    }
}
