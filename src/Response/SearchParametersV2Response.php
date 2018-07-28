<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchParametersV2Response
 *
 * @JMS\AccessType("public_method")
 */
class SearchParametersV2Response implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ReferenceV2PagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ReferenceV2PagedResult
     */
    protected $out;
                                    
    /**
     * @return ReferenceV2PagedResult
     */
    public function getOut(): ?ReferenceV2PagedResult
    {
        return $this->out;
    }

    /**
     * @param ReferenceV2PagedResult $out
     */
    public function setOut(ReferenceV2PagedResult $out): void
    {
        $this->out = $out;
    }
}
