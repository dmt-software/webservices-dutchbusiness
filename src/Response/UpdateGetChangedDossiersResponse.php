<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateGetChangedDossiersResponse
 *
 * @JMS\AccessType("public_method")
 */
class UpdateGetChangedDossiersResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UpdateReferencePagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var UpdateReferencePagedResult
     */
    protected $out;
                                    
    /**
     * @return UpdateReferencePagedResult
     */
    public function getOut(): ?UpdateReferencePagedResult
    {
        return $this->out;
    }

    /**
     * @param UpdateReferencePagedResult $out
     */
    public function setOut(UpdateReferencePagedResult $out): void
    {
        $this->out = $out;
    }
}
